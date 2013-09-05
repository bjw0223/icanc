<?php
class Install_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function run($query)
	{
        $this->db->query($query);
    }


}
