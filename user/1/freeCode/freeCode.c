#include <pthread.h> 
#include <unistd.h>
#include <stdlib.h>
<<<<<<< HEAD
#include <stdio.h>
void *runCode34567(void *id34567){	int i,j;
	int n;
	
	char seekname[10]="hyunjung";
	printf("찾고자 하는 이름 : %s\n", seekname);
	char name[10][10]={"elle", 
                       "yeomyeon", 
                       "almang", 
                       "hyunjung", 
                       "han", 
                       "heejung", 
                       "mingjaen", 
                       "killer", 
                       "coke", 
                       "solas"};
	
	for(i=0; i<10; i++)
    {
      	j=0;
    	while(name[i][j]!='\0')
        {
        	j++;
        }
      	printf("%d번 글자수 : %d\n",i+1,j);
      	n=j;
      
      	if(n==8)
        {
          	int flag=0;
          
    		for(j=0; j<n;j++)
        	{
         	 	if(name[i][j]!=seekname[j])
          		{
            		//printf("불일치\n");
          			flag=1;
                  	break;
          		}
            }
          	if(flag==0)
            {
          		printf("일치\n");
            }
        }
      	else
        {
          //printf("불일치\n");
        }
    }}

void *checkTime34567(void *id34567)
=======
#include <stdio.h>void *runCode34567(void *id34567) 
<<<<<<< HEAD
{	return 0;}void *checkTime34567(void *id34567)
>>>>>>> 1bcb0514edbd65a7545a5cbc91bb6f9b7cc89623
=======
{	printf("dd");    return 0;
}void *checkTime34567(void *id34567)
>>>>>>> 84bd042e42ef9f3fb4a78a4bd7a2d8508f122c23
{
    sleep(2);
    
    //pthread_cancel((pthread_t )id34567);
    pthread_kill((pthread_t)id34567, 9);
}

int main()
{
    pthread_t code34567,check34567;
    int thr_id34567;
    int status34567;
    int a34567 = 1;

    // 실제 사용자 코드 실행 쓰레드
    thr_id34567 = pthread_create(&check34567, NULL, checkTime34567,(void *)&check34567);
    
    if (thr_id34567 < 0)
    {
        perror("thread create error : ");
        exit(0);
    }

    // 사용자 코드가 10초 이상 진행시 KILL 쓰레드
    thr_id34567 = pthread_create(&code34567, NULL, runCode34567, (void *)&check34567);
    if (thr_id34567 < 0)
    {
        perror("thread create error : ");
        exit(1);
    }

    // 쓰레드 종료를 기다린다. 
    pthread_join(check34567, (void **)&status34567);
    
    return 0;
}