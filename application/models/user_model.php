<?php
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    // 회원 추가(가입)
    function add($option)
    {
        $this->db->set('email',$option['email']);
        $this->db->set('nickname',$option['nickname']);
        $this->db->set('password',$option['password']);
        $this->db->set('created','NOW()',false);
        $this->db->insert('user');
        $result = $this->db->insert_id();
        return $result;
    }
    
    // 회원 삭제(탈퇴)
    function del($email)
    {
       $this->db->where('email', $email);
       $this->db->delete('user'); 
    }
    
    // 별명 중복 확인
    function checkRedundancy($option)
    {
        $result = $this->db->get_where('user',array('nickname'=>$option['nickname']))->row();
        return $result;
    }
    
    // 별명 변경
    function nicknameModify($option)
    {
        $this->db->where('nickname', $option['beforeNick']);
        $this->db->set('nickname',$option['afterNick']);
        $this->db->update('user'); 
    }
    
    // 이메일로 유저 정보 가져오기
    function getByEmail($option)
    {
        $result = $this->db->get_where('user',array('email'=>$option['email']))->row();
        return $result;
    }


}
