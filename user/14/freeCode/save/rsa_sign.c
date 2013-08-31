#include  "myheader.h"
#include <stdlib.h>
#include <string.h>
#include <stdio.h>
#include <openssl/sha.h>
#include <openssl/rsa.h>
#include <openssl/hmac.h>

#define SK_SIZE 128     // 128 bits (for AES)
#define RSA_MOD_SIZE 1024

int SSU_SEC_rsa_key_gen(RSA **sk, RSA **pk);
int SSU_SEC_sha1_gen(uchar *msg, int msg_len, uchar **hash, int *hash_len) ; 
int SSU_SEC_rsa_sign(uchar *msg, int msg_len, RSA *sk, uchar **sig, int *sig_len) ; 
int SSU_SEC_rsa_verify(uchar *msg, int msg_len, uchar *sig, int sig_len,  RSA *pk) ; 
char* BinaryToBN( uchar *msg, int msg_len );

int main()
{
	RSA   *SK,  *PK;

	char *msg = "This is the sample message for testing RSA encryption in OpenSSL.";
	uchar *sig_data;
	int sig_data_len;
	int iRet = 1;
	int msg_len = 0;
	FILE *fp = NULL;
	fp = fopen( "result.txt", "w+" );
	if( fp == NULL )
  	     return 0;

	fprintf( fp, "<main>\n" );
	if(SSU_SEC_rsa_key_gen(&SK, &PK) )
	{
	   fprintf( fp, "* RSA Key generation OK.\n" );
	   fprintf( fp, "Private Key (d) = %s\n", BN_bn2hex(SK->d) );
	   fprintf( fp, "Public Key (e) = %s\n", BN_bn2hex(PK->e) );
	   fprintf( fp, "Public Key (n) = %s\n", BN_bn2hex(PK->n) );
	}
	else
	{
  	   fprintf( fp, "* RSA Key generation fails!\n" );
	   iRet = 0;
	   goto END;
	}
	sig_data = NULL;  sig_data_len = 0;
	msg_len = strlen(msg)+1;
	if(SSU_SEC_rsa_sign(msg, strlen(msg)+1, SK, &sig_data, &sig_data_len) ) 
	{
 	   fprintf( fp, "* RSA Signing OK.\n" );
	   fprintf( fp, "Signed message = %s\n", BinaryToBN(sig_data, sig_data_len) );
	   fprintf( fp, "Signed message length  = %d\n", sig_data_len);
   	}
	else
	{
	   fprintf( fp, "* RSA signing fails!\n" );
	   iRet = 0;
	   goto END;
	}
	if(SSU_SEC_rsa_verify(msg, msg_len, sig_data, sig_data_len,  PK) ) 
	{
  	   fprintf( fp, "* RSA verifying OK.\n" );
	}
	else
	{
 	   fprintf( fp, "* RSA verifying fails!\n" );
	   iRet = 0;   goto END;
	}


END:
	fprintf( fp, "++++++++++++ END of PROGRAM ++++++++++++\n" );
	fclose( fp );

	free( SK );  free( PK );
	free( sig_data );

	return 1;
}

char* BinaryToBN( uchar *msg, int msg_len )
{
	 BIGNUM *temp;

	 temp = BN_new();
	 BN_init(temp);

	 BN_bin2bn(msg, msg_len, temp); // binary to BN

	 return BN_bn2hex(temp);   // BN to hex
}

int SSU_SEC_rsa_verify(uchar *msg, int msg_len, uchar *sig, int sig_len,  RSA *pk)  
{
	uchar *hashval; int hashval_len; 
	int ret;

	SSU_SEC_sha1_gen(msg, msg_len, &hashval, &hashval_len);
	ret = RSA_verify(NID_sha1, hashval, hashval_len, sig, sig_len, pk); 
     // Success=1, fail=0;

	return ret;	
}


int SSU_SEC_rsa_sign(uchar *msg, int msg_len, RSA *sk, uchar **sig, int *sig_len)  
{
	uchar *hashval; int hashval_len;
	int ret;
	
	SSU_SEC_sha1_gen(msg, msg_len, &hashval, &hashval_len);
	*sig_len = RSA_size(sk);
	*sig = calloc(1, *sig_len);
	ret = RSA_sign(NID_sha1, hashval, hashval_len, *sig, (unsigned int *)sig_len, sk);

	return ret;	
}


int SSU_SEC_sha1_gen (uchar *msg, int msg_len, uchar **hash, int *hash_len)  
{
	// 입력 파라미터:  uchar *msg; int msg_len;
	// 출력 파라미터:  uchar **hash; int *hash_len 	

	// 내부변수 
	int ret; uchar *hash1;

	hash1 = calloc(1, SHA_DIGEST_LENGTH);
	SHA1(msg, (unsigned long) msg_len, hash1); 
	*hash=hash1;
	*hash_len=SHA_DIGEST_LENGTH;    // SHA_DIGEST_LENGTH=20

	return ret;	
}


int SSU_SEC_rsa_key_gen(RSA **sk, RSA **pk)
{
	RSA *rsa;

	if(rsa == NULL) return 0;

	rsa=RSA_generate_key(RSA_MOD_SIZE, RSA_F4, NULL, NULL);  //RSA_F4=65537

	if(NULL == rsa) return 0;
	
	*sk=RSAPrivateKey_dup(rsa); 
	*pk=RSAPublicKey_dup(rsa); 

	RSA_free(rsa);

	return 1;
}

