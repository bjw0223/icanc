<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Compiler extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
    }
    function index()
    {
    }
    
    // c파일 생성
    function _createFile($code)
    {
        // 권한 해제
        umask(0);
        
        // session값에 저장된 mail값 불러오기
        $this->load->model('user_model');
        $mail = $this->session->userdata('user_email');
        $user = $this->user_model->getByEmail(array('email'=>$mail));
        delete_files('./user/'.$user->id.'/temp/');

        $fp = fopen('/var/www/icanc/user/'.$user->id.'/temp/test.c','w');
        fwrite($fp,$code);
        fclose($fp);

        return $user;
    }
    
    function compile()
    {
        $head = $_POST['head'];
        $code = $_POST['code'];
        $tail = $_POST['tail'];
        $finalCode = $head.$code."\r".$tail;
       
        // textarea에 text값 가져와 \n처리
        $finalCode = str_replace("\r\n","\n", $finalCode);
        $finalCode = str_replace("\r","\n", $finalCode);
        
        $user = $this->_createFile($finalCode);
            
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
             $error = str_replace('./user/'.$user->id.'/temp/test.c:',">> ", $error);
             echo json_encode($error);
         }
        // 컴파일 오류가 없을시 실행결과 출력
         else
         {
             echo json_encode($runOutput);
         }
    }

}
