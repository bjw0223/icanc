<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Compiler extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
    }
    function index()
    {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('reference');
        $data['result']= null;
        $this->load->view('editer',$data);
        $this->load->view('footer');
    }
    function compile()
    {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('reference');
        // 권한 해제
        umask(0);
        
        // session값에 저장된 mail값 불러오기
        $this->load->model('user_model');
        $mail = $this->session->userdata('user_email');
        $user = $this->user_model->getByEmail(array('email'=>$mail));
        delete_files('./user/'.$user->id.'/temp/');
        
         
        // textarea에 text값 가져와 \n처리
        $code = $this->input->post('code');
        $code = str_replace("\r\n","\n", $code);
        $code = str_replace("\r","\n", $code);
        
        // 로그인 상태이면 컴파일 실행 
        if(!($mail === false))
        {
            $fp = fopen('/var/www/icanc/user/'.$user->id.'/temp/test.c','w');
            fwrite($fp,$code);
            fclose($fp);
            
            // 저장된 code GCC
            $gcc = 'gcc -o ./user/'.$user->id.'/temp/test ./user/'.$user->id.'/temp/test.c 2> ./user/'.$user->id.'/temp/errmsg.txt';
            $run = './user/'.$user->id.'/temp/test';
            
            // compile
            exec($gcc, $gccOutput, $gccStatus);
            exec($run, $runOutput, $runStatus);
            
            // 컴파일시 에러 발견됐을때 에러출력
             if($gccOutput == $runOutput)
             {
                 $error = array(read_file('./user/'.$user->id.'/temp/errmsg.txt'));
                 $error = str_replace("\n","<br>", $error);
                 $data['result'] = $error;
                 $this->load->view('editer',$data);
             }
            // 컴파일 오류가 없을시 실행결과 출력
             else
             {
                 $data['result'] = $runOutput;
                 $this->load->view('editer',$data);
             }
        }
        // 로그인 상태가 아닐때
        else
        {
            $this->session->set_flashdata('message','login이 되어 있지 않습니다');
            redirect( base_url().'index.php/main');
        } 
        $this->load->view('footer');
    }   

// CLASS close
}
