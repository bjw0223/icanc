#include <pthread.h>
#include <unistd.h>
#include <stdlib.h>
#include <stdio.h>
void *runCode34567(void *id34567)
<<<<<<< HEAD
{}
=======
{printf("정답은 i_int=1004 입니다\n");}
>>>>>>> 826a580d5f06b359d9284c6a428e154290999bdb

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