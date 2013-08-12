<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('file');
    }
	
    public function index()
	{
        $this->info();
	}
	
    // 회원정보 폼
    public function info()
    {
        $this->load->view('header');
        $this->_head('info');
        $this->load->view('footer');
	}
	
    // 회원 초대 폼
    public function invitation()
    {
        $this->load->view('header');
        $this->_head('invitation');
        $this->load->view('footer');
	}
	
    // 정보 수정 폼
    public function modification()
    {
        $this->load->view('header');
        $this->_head('modification');
        $this->load->view('footer');
	}
    
    // 기본정보 변경 폼
    function basicinfoModify()
    {
        $this->load->view('header');
        $this->_head('basicinfomodify');
        $this->load->view('footer');
    }

    // 비밀번호 변경 폼
    function pwdmodify()
    {
        $this->load->view('header');
        $this->_head('pwdmodify');
        $this->load->view('footer');
    }     

    // 파일 관리 폼
    public function showdir($page=1,$list_count=10)
    {
        $nickname = $this->session->userdata('user_nickname');
        $search_param = null;
        $data['search_key'] = '';
        $data['search_keyword'] = '';

        if($this->input->get_post('search_key') && $this->input->get_post('search_keyword')){
            $search_param = array();
            $data['search_key'] =  $search_param['search_key'] = $this->input->get_post('search_key');
            $data['search_keyword'] = $search_param['search_keyword'] = $this->input->get_post('search_keyword');
        }


        $this->load->model('board_model');
        $result=$this->board_model->getMyList($search_param,$page,$list_count,$nickname);

        $data['active'] = 'mypage';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents');
        $this->load->view('mypage/showdir',$result);
        $this->load->view('footer');
	}
	
    // 회원 탈퇴 폼
    public function signout()
    {
        $this->load->view('header');       
        $this->_head('signout');
        $this->load->view('footer');
    }
    
    // 회원 정보 삭제
    public function destroyInfo()
    {
            // 탈퇴 회원에 대한 user폴더 내의 해당 id폴더 삭제
            $user = $this->user_model->getByEmail(array('email'=>$this->session->userdata('user_email')));
            $userPath = "/var/www/icanc/user"."/".$user->id;
            
            $rmdir = "rm -r ".$userPath;
            
            $this->session->set_flashdata('message','회원탈퇴가 되었습니다.');
            $this->user_model->del(
                                   $this->session->userdata('user_email')
                                  );
            $this->session->sess_destroy();
            
            // id폴더 삭제 명령
            exec($rmdir);
            redirect( base_url().'index.php/main');
	}
    
    // 기본정보 변경하기
    function modifyBasicinfo()
    {
        $this->_modifyNickname();
        $this->_modifyDateOfBirth();
        $this->_modifyJob();
        redirect(base_url().'index.php/main');
    }

    // 비밀번호 변경하기
    function modifyPwd()
    {
        $this->_modifypassword();
        redirect(base_url().'index.php/main');
    }
    
    // 별명 변경 함수
    function _modifyNickname()
    {
        // 별명 변경
        $beforeNick = $this->session->userdata('user_nickname');
        $afterNick = $this->input->post('nickname');
        $option = array(
                    'beforeNick' => $beforeNick,
                        'afterNick' => $afterNick
                       );
        $this->user_model->nicknameModify($option);
        
        $sess_add = array( 'user_nickname' => $afterNick); // 세션의 별명 변경
        $this->session->set_userdata($sess_add);
    }

    // 생년월일 변경 함수
    function _modifyDateOfBirth()
    {
        $beforeDateOfBirth = $this->session->userdata('user_dateOfBirth');
        $afterDateOfBirth = $this->input->post('year').".".$this->input->post('month').".".$this->input->post('day');
        
        $option = array(
                        'beforeDateOfBirth' => $beforeDateOfBirth,
                        'afterDateOfBirth' => $afterDateOfBirth
                       );
        $this->user_model->modifyDateOfBirth($option);
        
        $sess_add = array( 'user_dateOfBirth' => $afterDateOfBirth); // 세션의 생년월일 변경
        $this->session->set_userdata($sess_add);
    }

    // 직업 변경 함수
    function _modifyJob()
    {
        require(APPPATH.'/controllers/auth'.EXT);
        $auth = new auth;        
        $beforeJob = $this->session->userdata('user_job');
        $afterJob = $auth->changeJob($this->input->post('job'));
        
        $option = array(
                        'beforeJob' => $beforeJob,
                        'afterJob' => $afterJob
                );
        $this->user_model->modifyJob($option);
        
        $sess_add = array( 'user_job' => $afterJob); // 세션의 직업 변경
        $this->session->set_userdata($sess_add);
    }

    // 비밀번호 변경 함수
    function _modifypassword()
    {
        
        if(!function_exists('password_hash')) // libarary 존재여부 확인
        {
            $this->load->helper('password');
        }
            $hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT); // 암호화 된 비밀번호              

        $option = array(
                        'email' => $this->session->userdata('user_email'),
                        'password' => $hash
                );
        $this->user_model->modifyPassword($option);
    }

    // 정보 중복 검사 함수
    function checkInfo()
    {
        $object = $_POST['object'];
        $target = $_POST['target'];
         
        if( $target == 'password')
        {
            $email = $this->session->userdata('user_email');
            $user = $this->verifyPassword($email, $object);
        }
        else
        {
            $user = $this->user_model->checkRedundancy($target, array($target=>$object));
        }

        if($user == null)
        {
            $flag['value'] = "true";
        }
        else
        {
            $flag['value'] = "false";
        }
        
            echo json_encode($flag);
    }

    // 비밀번호 일치 검사 함수
    function verifyPassword($email, $password)
    {
        if( !function_exists('password_hash') )
        {
            $this->load->helper('password');
        }
        
            $user = $this->user_model->getByEmail(array('email'=>$email));
        
        if( $email == $user->email && password_verify( $password , $user->password) )
        {
            return $user;
        }
        else
        {
            return null;
        }
    }
    
    // 헤더 함수
    public function _head($address)
    {
        $data['email'] = $this->session->userdata('user_email');
        $data['nickname'] = $this->session->userdata('user_nickname');
        $data['job'] = $this->session->userdata('user_job');
        $data['dateOfBirth'] = $this->session->userdata('user_dateOfBirth');
        $data['selected'] = $address;
        $data['active'] = 'mypage';
        $this->load->view('navbar',$data);
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents',$data);
        $this->load->view('mypage/'.$address);
    }

}


