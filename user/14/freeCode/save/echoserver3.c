/* 
 * echoserver.c - A simple connection-based echo server 
 * usage: echoserver <port>
 */

#include "myheader.h"
#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>
#include <string.h>
#include <netdb.h>
#include <sys/types.h> 
#include <sys/socket.h>
#include <netinet/in.h>
#include <arpa/inet.h>

#include <openssl/bn.h>
#include <openssl/rand.h>
#define SK_SIZE 128
#define BUFSIZE 1024

#if 0
/* 
 * Structs exported from netinet/in.h (for easy reference)
 */

/* Internet address */
struct in_addr {
  unsigned int s_addr; 
};

/* Internet style socket address */
struct sockaddr_in  {
  unsigned short int sin_family; /* Address family */
  unsigned short int sin_port;   /* Port number */
  struct in_addr sin_addr;	 /* IP address */
  unsigned char sin_zero[...];   /* Pad to size of 'struct sockaddr' */
};

/*
 * Struct exported from netdb.h
 */

/* Domain name service (DNS) host entry */
struct hostent {
  char    *h_name;        /* official name of host */
  char    **h_aliases;    /* alias list */
  int     h_addrtype;     /* host address type */
  int     h_length;       /* length of address */
  char    **h_addr_list;  /* list of addresses */
}
#endif

/*
 * error - wrapper for perror
 */
int SSU_SEC_sk_gen(uchar **sk, int *sk_len);
int SSU_SEC_aes_encrypt ( uchar *msg, int msg_len, uchar *sk, int sk_len, uchar **enc_msg, int *enc_msg_len );
int SSU_SEC_aes_decrypt ( uchar *enc_msg, int enc_msg_len, uchar *sk, int sk_len, uchar **msg, int *msg_len );

void error(char *msg) {
  perror(msg);
  exit(1);
}

int main(int argc, char **argv) {
  int listenfd; /* listening socket */
  int connfd; /* connection socket */
  int portno; /* port to listen on */
  int clientlen; /* byte size of client's address */
  struct sockaddr_in serveraddr; /* server's addr */
  struct sockaddr_in clientaddr; /* client addr */
  struct hostent *hostp; /* client host info */
  char buf[BUFSIZE]; /* message buffer */
  char *hostaddrp; /* dotted decimal host addr string */
  int optval; /* flag value for setsockopt */
  int n; /* message byte size */

  uchar *enc_data;
  int enc_data_len;
  uchar *dec_data;
  int dec_data_len;
  int sk_len=0;
  uchar *sk;

  /* check command line args */
  if (argc != 2) {
    fprintf(stderr, "usage: %s <port>\n", argv[0]);
    exit(1);
  }
  portno = atoi(argv[1]);

  /* socket: create a socket */
  listenfd = socket(AF_INET, SOCK_STREAM, 0);
  if (listenfd < 0) 
    error("ERROR opening socket");

  /* setsockopt: Handy debugging trick that lets 
   * us rerun the server immediately after we kill it; 
   * otherwise we have to wait about 20 secs. 
   * Eliminates "ERROR on binding: Address already in use" error. 
   */
  optval = 1;
  setsockopt(listenfd, SOL_SOCKET, SO_REUSEADDR, 
	     (const void *)&optval , sizeof(int));

  /* build the server's internet address */
  bzero((char *) &serveraddr, sizeof(serveraddr));
  serveraddr.sin_family = AF_INET; /* we are using the Internet */
  serveraddr.sin_addr.s_addr = htonl(INADDR_ANY); /* accept reqs to any IP addr */
  serveraddr.sin_port = htons((unsigned short)portno); /* port to listen on */

  /* bind: associate the listening socket with a port */
  if (bind(listenfd, (struct sockaddr *) &serveraddr, 
	   sizeof(serveraddr)) < 0) 
    error("ERROR on binding");

  /* listen: make it a listening socket ready to accept connection requests */
  if (listen(listenfd, 5) < 0) /* allow 5 requests to queue up */ 
    error("ERROR on listen");

  /* main loop: wait for a connection request, echo input line, 
     then close connection. */
  clientlen = sizeof(clientaddr);
  while (1) {

    /* accept: wait for a connection request */
    connfd = accept(listenfd, (struct sockaddr *) &clientaddr, &clientlen);
    if (connfd < 0) 
      error("ERROR on accept");
    
    /* gethostbyaddr: determine who sent the message */
    hostp = gethostbyaddr((const char *)&clientaddr.sin_addr.s_addr, 
			  sizeof(clientaddr.sin_addr.s_addr), AF_INET);
    if (hostp == NULL)
      error("ERROR on gethostbyaddr");
    hostaddrp = inet_ntoa(clientaddr.sin_addr);
    if (hostaddrp == NULL)
      error("ERROR on inet_ntoa\n");
    printf("server established connection with %s (%s)\n", 
	   hostp->h_name, hostaddrp);
    

    /* read: read input string from the client */
    bzero(buf, BUFSIZE);
    n = read(connfd, buf, BUFSIZE);
    if (n < 0) 
      error("ERROR reading from socket");
    sk = calloc(sizeof(uchar), SK_SIZE/8);
    if(SSU_SEC_sk_gen(&sk, &sk_len))
    {
        printf("AES Key generation OK. \n");
        printf("AES Key = %s\n", sk);
        printf("AES Key length = %d\n", sk_len);
    }
    SSU_SEC_aes_decrypt( buf, BUFSIZE, sk, sk_len, &dec_data, &dec_data_len );
    
    printf("server received %d bytes: %s", n, dec_data);
    
    /* write: echo the input string back to the client */
    n = write(connfd, dec_data, dec_data_len);
    if (n < 0) 
      error("ERROR writing to socket");

    close(connfd);
  }
}

int SSU_SEC_aes_encrypt(uchar *msg, int msg_len, uchar *sk, int sk_len, uchar **enc_msg, int *enc_msg_len )
{
	// 입력 파라미터: uchar *msg; int msg_len; uchar *sk; int sk_len;
	// 출력 파라미터: uchar **enc_msg; int *enc_msg_len;

	// 내부변수
	int ret = TRUE;
	int templen;

	// EVP 객체를 이용한 AES 암호화
	// ctx(암호화에 사용되는 데이터들이 저장되는 임시 저장소) 초기화
	EVP_CIPHER_CTX ctx;
	EVP_CIPHER_CTX_init(&ctx);
	EVP_EncryptInit_ex(&ctx, EVP_aes_128_cbc(), NULL, sk, IVseedConstant);

	// 초기화 끝난 후에 암호문 저장될 메모리 할당
	*enc_msg = malloc( msg_len + EVP_CIPHER_CTX_block_size(&ctx) );
	if( *enc_msg == NULL )
	            return FALSE;

	// 업데이트: 메시지 암호화(마지막 블록 제외)
	if(!EVP_EncryptUpdate(&ctx, *enc_msg, enc_msg_len, msg, msg_len))
	          ret = FALSE;

	// 종료: 마지막 블록 암호화
	if(!EVP_EncryptFinal_ex(&ctx, *enc_msg+(*enc_msg_len), &templen))
	          ret = FALSE;
	// 암호문 길이
	*enc_msg_len += templen;

	EVP_CIPHER_CTX_cleanup(&ctx);
    printf("enc massage: %s\n",*enc_msg);
    printf("massage: %s\n",msg);

	return ret;
}

int SSU_SEC_aes_decrypt( uchar *enc_msg, int enc_msg_len, uchar *sk, int sk_len, uchar **msg, int *msg_len )
{
	// 입력 파라미터: uchar *enc_msg; int enc_msg_len; uchar *sk; int sk_len;
	// 출력 파라미터: uchar **msg; int *msg_len;

	// 내부변수
	int ret = TRUE;
	int templen;

	// EVP 객체를 이용한 AES 암호화
	// ctx(암호화에 사용되는 데이터들이 저장되는 임시 저장소) 초기화
	EVP_CIPHER_CTX ctx;
	EVP_CIPHER_CTX_init(&ctx);

	EVP_DecryptInit_ex(&ctx, EVP_aes_128_cbc(), NULL, sk, IVseedConstant);

	// 초기화가 끝난후에 해야 한다. 복호문 저장할 버퍼 생성
	*msg = malloc( enc_msg_len );
	if( *msg == NULL )
  	                return FALSE;

	//업데이트, 마지막 블록을 제외 하고 모두 복호화
	if(!EVP_DecryptUpdate(&ctx, *msg, msg_len, enc_msg, enc_msg_len))
	                 ret = FALSE;

	// 종료. 마지막 블록을 복호화
	if(!EVP_DecryptFinal_ex(&ctx, *msg+(*msg_len), &templen))
	                ret = FALSE;

	// 복호문 길이는 업데이트, 종료 과정에서 나온 결과의 합
	*msg_len += templen;

	EVP_CIPHER_CTX_cleanup(&ctx);
 
	return ret;
}

int SSU_SEC_sk_gen(uchar **sk, int *sk_len)
{
    BIGNUM *rnd=BN_new();
    int ret;
    char *seed_msg = "message for seed";
    RAND_seed(seed_msg, strlen(seed_msg));                 // random seed
	ret = BN_rand(rnd, SK_SIZE, 1, 0);
    *sk_len = BN_num_bytes(rnd);
    BN_bn2bin(rnd, *sk); 
	
    return ret;
}

