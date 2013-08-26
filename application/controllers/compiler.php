<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Compiler extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
        $this->load->model('quiz_model');
        $this->load->model('user_model');
    }
    function index()
    {
    }
    
    function createCode()
    {
        $flag = $_POST['flag'];

        $rawData = $this->quiz_model->getCodingCode(1);
        $data = (array)$rawData;

        $threadCodeHead = $data['threadCodeHead'];
        $code = $_POST['code'];
        $threadCodeTail = $data['threadCodeTail'];
        
        // textarea에 text값 가져와 \n처리
        $finalCode = $threadCodeHead."\r".$code."\r".$threadCodeTail;
        
        if($flag == 0)
        {
            $this->_preProcessCodingQuiz($finalCode);
        }
        else if($flag == 1)
        {
            $this->_preProcessFreeCoding($finalCode);
        }
    }
    
    function _preProcessCodingQuiz($code)
    {
        $filePath = $this->_createFile($code,'quiz','quiz.c');
        $this->_compile($filePath,'quiz');
        delete_files($filePath);
    }

    function _preProcessFreeCoding($code)
    {
        $filePath = $this->_createFile($code,'freeCode','freeCode.c');
        $this->_compile($filePath,'freeCode');
        //delete_files($filePath);
    }
    
    function _compile($filePath,$target)
    {
        // 저장된 code GCC
        $gcc = 'gcc -o '.$filePath.$target.' '.$filePath.$target.'.c -lpthread 2> '.$filePath.'errmsg.txt';
        $run = $filePath.$target;
        
        // compile
        exec($gcc, $gccOutput, $gccStatus);
        exec($run, $runOutput, $runStatus);
        
        // 컴파일시 에러 발견됐을때 에러출력
         if($gccOutput == $runOutput)
         {
             $error = array( read_file($filePath.'errmsg.txt') );
             $error = str_replace("\n","<br>", $error);
             $error = str_replace($filePath.$target.'.c:',"--> ", $error);
             $error = str_replace("'runCode34567'","'main'",$error);
             echo json_encode($error);
         }
        // 컴파일 오류가 없을시 실행결과 출력
         else
         {
                echo json_encode($runOutput);
         }
    }
    
    // c파일 생성
    function _createFile($code,$path,$fileName)
    {
        umask(0);  //권한 해제
        $filePath = $this->filePath().$path."/";
        
        delete_files($filePath);

        $fp = fopen($filePath.$fileName,'w');
        fwrite($fp,$code);
        fclose($fp);

        return $filePath;
    }
    
    // user/id/까지의 파일경로 추출
    function filePath()
    {
        // session값에 저장된 mail값 불러오기
        $user = $this->user_model->getByEmail(array('email'=>$this->session->userdata('user_email')));

        $SCRIPT_FILENAME = str_replace("index.php","user/",$_SERVER["SCRIPT_FILENAME"]).$user->id.'/';
        return $SCRIPT_FILENAME;
    }
}
