#include <openssl/rsa.h>
#include <openssl/bn.h>
#include <string.h>
#include <stdio.h>

#define RSA_MOD_SIZE 1024    // RSA key size

typedef unsigned char uchar;

#define SAFE_FREE(data) {if(NULL != data) free(data);}

int SSU_SEC_rsa_key_gen(RSA **sk, RSA **pk);
int SSU_SEC_rsa_encrypt(uchar *msg, int msg_len, RSA *pk, uchar **enc_msg, int *enc_msg_len);
int SSU_SEC_rsa_decrypt(uchar *enc_msg, int enc_msg_len, RSA *sk, uchar **msg, int *msg_len);
char* BinaryToBN( uchar *msg, int msg_len );


int main()
{
	RSA  *SK,  *PK;

	char *msg = "This is the sample message for testing RSA encryption in OpenSSL.";

	uchar *enc_data;
	int enc_data_len;
	uchar *dec_data;
	int dec_data_len;
	int iRet = 1;

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
	enc_data = NULL;
	enc_data_len = 0;

	if(SSU_SEC_rsa_encrypt(msg, strlen(msg)+1, PK, &enc_data, &enc_data_len ) )
	{
 	   fprintf( fp, "* RSA encryption OK.\n" );
	   fprintf( fp, "Encyrpted message = %s\n", BinaryToBN(enc_data, enc_data_len) );
	   fprintf( fp, "Encrypted message length  = %d\n", enc_data_len);
	}
	else
	{
	   fprintf( fp, "* RSA encryption fails!\n" );
	   iRet = 0;
	   goto END;
	}
	dec_data = NULL;
	dec_data_len = 0;

	if(SSU_SEC_rsa_decrypt(enc_data, enc_data_len, SK, &dec_data, &dec_data_len ) )
	{
  	   fprintf( fp, "* RSA decryption OK.\n" );
	   fprintf( fp, "Decrypted message = %s\n", dec_data );
	   fprintf( fp, "Decrypted message length  = %d\n", dec_data_len );
	}
	else
	{
 	   fprintf( fp, "* RSA decryption fails!\n" );
	   iRet = 0;
	   goto END;
	}
END:

	fprintf( fp, "++++++++++++ END of PROGRAM ++++++++++++\n" );
	fclose( fp );

	if(0 == iRet)
  	   return 0;
	
	//메모리 해제
	RSA_free( SK );
	RSA_free( PK );

	free( enc_data );
	free( dec_data );

	return 1;
}







int SSU_SEC_rsa_key_gen(RSA **sk, RSA **pk)  
{
	RSA *rsa;

	rsa=RSA_generate_key(RSA_MOD_SIZE, RSA_F4, NULL, NULL);  //RSA_F4=65537

	if(NULL == rsa) return 0;
	
	*sk=RSAPrivateKey_dup(rsa); 
	*pk=RSAPublicKey_dup(rsa); 

	RSA_free(rsa);

	return 1;
}


int SSU_SEC_rsa_encrypt(uchar *msg, int msg_len, RSA *pk, uchar **enc_msg, int *enc_msg_len)  
{
	// 입력 파라미터: uchar *msg; int msg_len; RSA *pk;
	// 출력 파라미터: uchar **enc_msg, int *enc_msg_len;

 	uchar buf[RSA_MOD_SIZE]; 
	int ret = 0;

	ret = RSA_public_encrypt(msg_len, msg, (uchar *)buf, pk, RSA_PKCS1_OAEP_PADDING);

	if(0 > ret ) 
	   return 0;
	 *enc_msg_len = RSA_size(pk);
	 *enc_msg = malloc(*enc_msg_len);

	 if(NULL == *enc_msg)
	    return 0;
	
	 memcpy(*enc_msg, buf, *enc_msg_len);
	
	 return 1;	
}

int SSU_SEC_rsa_decrypt(uchar *enc_msg, int enc_msg_len, RSA *sk, uchar **msg, int *msg_len)  
{
	// 입력 파라미터: uchar *enc_msg; int enc_msg_len; RSA *sk;
	// 출력 파라미터: uchar **msg, int *msg_len;

 	uchar buf[RSA_MOD_SIZE];  

	*msg_len = RSA_private_decrypt(enc_msg_len, enc_msg, (uchar *)buf, sk, RSA_PKCS1_OAEP_PADDING);

	if(0 > *msg_len)
	   return 0;
	*msg = malloc(*msg_len);

	   if(NULL == *msg)
	      return 0;
	
	   memcpy(*msg, buf, *msg_len);

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


