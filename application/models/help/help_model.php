<?php 

class Help_model extends CI_Model {
    var $table = 'help';

    function __construct()
    {
        parent::__construct();
    }
    function get($name)
    {
        return $this->db->query('SELECT * FROM help where name="'.$name.'"')->row();
        //return $this->db->get_where('topic',array('id'=>$id))->row()
    }
    function gets()
    {
        return $this->db->query('SELECT * FROM help;')->result();
    }
    function getHelpList($page=1,$list_count=10,$search_param=null)
    {

		$this->db->limit($list_count , ($page-1)*$list_count );
        if( $search_param == null )
        {
            $query = $this->db->get($this->table);
            $total_rows = $this->db->count_all($this->table);
        }else{
			$this->db->like($search_param['search_key'],$search_param['search_keyword']);
			$query = $this->db->get($this->table);
				
			$this->db->like($search_param['search_key'],$search_param['search_keyword']);
			$total_rows = $this->db->count_all_results($this->table);
        }
        $pagination['page'] = $page ;
        $pagination['list_count'] = $list_count ; 
        $pagination['total_rows'] = $total_rows ; 
        $pagination['page_count'] = ceil($total_rows / $list_count) ; 

        $result['list'] = $query->result() ; 
        $result['pagination'] = $pagination ; 

        return $result ;

    }
}
