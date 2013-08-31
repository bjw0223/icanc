#include <pthread.h>
#include <unistd.h>
#include <stdlib.h>
#include <stdio.h>
void *runCode34567(void *id34567)
{	int i,j;
	
	for(i=1; i<10; ++i)
    {
		for(j=1; j<10; ++j)
        {
          printf("%d * %d = %d\n",i,j,i*j);
        }
      	printf("\n");
    }}

void *checkTime34567(void *id34567)
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