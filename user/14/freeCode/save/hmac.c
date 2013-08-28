#include  "myheader.h"
#include <stdio.h>
#include <string.h>
#include <openssl/hmac.h>
#include <openssl/bn.h>
#include <openssl/rand.h>
#define SK_SIZE 128

int SSU_SEC_sk_gen(uchar **sk, int *sk_len);
int SSU_SEC_hmac_gen (uchar *msg, int msg_len, uchar *sk, int ssk_len, uchar **mac, uint *mac_len);
int SSU_SEC_hmac_verify (uchar *msg, int msg_len, uchar *sk, int sk_len, uchar *mac, uint mac_len);

int main()
{
    uchar *sk;
    uchar* msg = "This is the sample message for testing HMAC in OpenSSL.";
    uchar* hmac_data = NULL;
    uint hmac_len = 0;
    int iRet = 1;	
    int sk_len=0;
    FILE* fp = NULL;

    fp=fopen("result.txt","w+");
    if(fp==NULL)
        return 0;
    fprintf(fp,"<main>");
    sk = calloc(sizeof(uchar), SK_SIZE/8);
    if(sk == NULL)
    {
        fprintf(fp, "calloc() fail.\n");
        goto END;
    }
    if(SSU_SEC_sk_gen(&sk, &sk_len))
    {
        fprintf(fp, "AES Key generation OK. \n");
        fprintf(fp, "AES Key = %s\n", sk);
        fprintf(fp, "AEs Key length = %d\n", sk_len);
    }
    else
    {
        fprintf(fp, "AES KEY generation Fail. \n");
        goto END;
    }

    if(SSU_SEC_hmac_gen(msg, strlen(msg)+1, sk, sk_len, &hmac_data, &hmac_len)){
    	fprintf(fp, "* HMAC gen OK.\n");
	fprintf(fp, "* HMAC = %s\n", hmac_data);
	fprintf(fp, "* HMAC len = %d\n", hmac_len);
    }else{
    	fprintf(fp, "* HMAC gen fail!\n");
    	iRet=0;
	goto END;
    }


    if(SSU_SEC_hmac_verify(msg, strlen(msg)+1, sk, sk_len, hmac_data, hmac_len)){
    	fprintf(fp, "* HMAC verify OK.\n");
	fprintf(fp, "* HMAC = %s\n", hmac_data);
	fprintf(fp, "* HMAC len = %d\n", hmac_len);
    }else{
	fprintf(fp, "* HMAC verify fail!\n");
	iRet=0;
	goto END;
    }

END:
    fprintf(fp, "+++++++++++END of PROGRAM+++++++++++\n");
    fclose(fp);
    if(sk != NULL){
	free(sk);
    }
    free(hmac_data);

    return 0;
}

int SSU_SEC_hmac_gen (uchar *msg, int msg_len, uchar *sk, int sk_len, uchar **mac, uint *mac_len)  
{
	// 입력 파라미터: uchar *msg; int msg_len; uchar *sk; int sk_len;
	// 출력 파라미터: uchar **mac; int *mac_len 	
	
 	// 내부변수 
	uchar *mac1;
	unsigned int mac1_len=0;
	uchar *ret;

	mac1=(uchar *)calloc(1, EVP_MAX_MD_SIZE);
	ret=HMAC(EVP_sha1(), sk, sk_len, msg, msg_len, mac1, &mac1_len);
	if(ret == NULL)
	    return 0;
	*mac=mac1;
	*mac_len=mac1_len;
        return 1;	
}

int SSU_SEC_hmac_verify (uchar *msg, int msg_len, uchar *sk, int sk_len, uchar *mac, uint mac_len)  
{
	// 입력 파라미터: uchar *msg; int msg_len; uchar *sk; int sk_len; uchar **mac; int *mac_len 	
	// 출력 파라미터: NULL; 

 	// 내부변수 
	uchar *mac1; unsigned int mac1_len = 0;
	int ret;

	mac1  = calloc(1, EVP_MAX_MD_SIZE);

	HMAC(EVP_sha1(), (void *)sk, sk_len, msg, msg_len, mac1, &mac1_len);
	if(memcmp(mac, mac1, EVP_MAX_MD_SIZE) == 0)
		ret = 1;
	else
		ret = 0;
	free(mac1);

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
