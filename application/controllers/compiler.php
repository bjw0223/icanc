<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Compiler extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
        $this->load->model('quiz_model');
    }
    function index()
    {
    }
    
    function compile()
    {

        $rawData = $this->quiz_model->getCodingCode(1);
        $data = (array)$rawData;

        $threadCodeHead = $data['threadCodeHead'];
        $code = $_POST['code'];
        $threadCodeTail = $data['threadCodeTail'];

        // textarea에 text값 가져와 \n처리
        $finalCode = $threadCodeHead."\r".$code."\r".$threadCodeTail;

        
        $filePath = $this->_createFile($finalCode);
            
        // 저장된 code GCC
        $gcc = 'gcc -o '.$filePath.'test '.$filePath.'test.c -lpthread 2> '.$filePath.'errmsg.txt';
        $run = $filePath.'test';
        
        // compile
        exec($gcc, $gccOutput, $gccStatus);
        exec($run, $runOutput, $runStatus);
        
        // 컴파일시 에러 발견됐을때 에러출력
         if($gccOutput == $runOutput)
         {
             $error = array( read_file($filePath.'errmsg.txt') );
             $error = str_replace("\n","<br>", $error);
             $error = str_replace($filePath.'test.c:',"--> ", $error);
             $error = str_replace("'runCode'","'main'",$error);
             echo json_encode($error);
         }
        // 컴파일 오류가 없을시 실행결과 출력
         else
         {
                echo json_encode($runOutput);
         }
    }
    
    // user/id/까지의 파일경로 추출
    function filePath()
    {
        // session값에 저장된 mail값 불러오기
        $this->load->model('user_model');
        $user = $this->user_model->getByEmail(array('email'=>$this->session->userdata('user_email')));

        $SCRIPT_FILENAME = str_replace("index.php","user/",$_SERVER["SCRIPT_FILENAME"]).$user->id.'/';
        return $SCRIPT_FILENAME;
    }
    
    // c파일 생성
    function _createFile($code)
    {
        umask(0);  //권한 해제
        $filePath = $this->filePath()."/temp/";
        
        delete_files($filePath);

        $fp = fopen($filePath.'test.c','w');
        fwrite($fp,$code);
        fclose($fp);

        return $filePath;
    }

}
