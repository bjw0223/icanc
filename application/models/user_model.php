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
        $this->db->set('job',$option['job']);
        $this->db->set('dateOfBirth',$option['dateOfBirth']);
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
    
    // 별명,이메일 중복 확인
    function checkRedundancy($check, $option)
    {
        if( $check == 'nickname')
        {
            $result = $this->db->get_where('user',array('nickname'=>$option['nickname']))->row();
            return $result;
        }
        else if( $check == 'email')
        {
            $result = $this->db->get_where('user',array('email'=>$option['email']))->row();
            return $result;
        }
    }
    
    // 별명 업데이트
    function nicknameModify($option)
    {
        $this->db->where('nickname', $option['beforeNick']);
        $this->db->set('nickname',$option['afterNick']);
        $this->db->update('user'); 
    }

    // 생년월일 업데이트
    function modifyDateOfBirth($option)
    {
        $this->db->where('dateOfBirth', $option['beforeDateOfBirth']);
        $this->db->set('dateOfBirth',$option['afterDateOfBirth']);
        $this->db->update('user'); 
    }

    // 직업 업데이트
    function modifyJob($option)
    {
        $this->db->where('job', $option['beforeJob']);
        $this->db->set('job',$option['afterJob']);
        $this->db->update('user'); 
    }
    
    // 비밀번호 업데이트
    function modifyPassword($option)
    {
        $this->db->where('email', $option['email']);
        $this->db->set('password',$option['password']);
        $this->db->update('user'); 
    }
    
    // 이메일로 유저 정보 가져오기
    function getByEmail($option)
    {
        $result = $this->db->get_where('user',array('email'=>$option['email']))->row();
        return $result;
    }

    // 해결된 문제 번호 변경
    function updateFinishQuestionNo($option)
    {
        $beforeData = $this->db->get_where('user',array('email'=>$option['email']))->row_array();
        
        if( $beforeData['finishQuestionNo'] <= $option['finishQuestionNo'] )
        {
            $this->db->where_in('email',$option['email']);
            $this->db->set('finishQuestionNo',$option['finishQuestionNo']);
            $this->db->update('user');
            $result = $option['finishQuestionNo'];
        }
        else
        {
            $result = $beforeData['finishQuestionNo'];
        }

        return $result;
       
    }
    
    // 해결된 문제 번호 변경
    function updateLevel($option)
    {
        $beforeData = $this->db->get_where('user',array('email'=>$option['email']))->row_array();
        
        if( $beforeData['level'] < $option['level'] )
        {
            $this->db->where_in('email',$option['email']);
            $this->db->set('level',$option['level']);
            $this->db->update('user');
            $result = $option['level'];
        }
        else
        {
            $result = $beforeData['level'];
        }

        return $result;
       
    }


}
