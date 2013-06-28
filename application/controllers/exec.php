<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exec extends CI_Controller {
    
	public function index()
	{
        $this->load->helper('file');
        $rmErrmsg = "rm -r ./application/controllers/errmsg.txt";
        $rmPlay = "rm -r ./application/controllers/test"; 
        $gcc = "gcc -o ./application/controllers/test ./application/controllers/test.c 2> ./application/controllers/errmsg.txt";
        $run = "./application/controllers/test";
        // 컴파일과 결과파일 실행
        exec($rmErrmsg);
        exec($rmPlay);
        exec($gcc, $gccOutput, $gccStatus);
        exec($run, $runOutput, $runStatus);
        // 컴파일시 에러 발견됐을때 에러출력
        if($gccOutput == $runOutput)
        {
            $error = array(read_file('./application/controllers/errmsg.txt'));
            foreach($error as $line)
            {
               $data = array('title'=>$line);
               $this->load->view('/console/console',$data);
            }
        }
        // 컴파일 오류가 없을시 실행결과 출력
        else
        {
            //echo "<pre>";
            foreach($runOutput as $line)
            {
               $data = array('title'=>$line);
               $this->load->view('/console/console',$data);
            }
        }
    }    
}

