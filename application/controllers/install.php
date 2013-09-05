<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Install extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('file');
        $this->load->dbforge();
        $this->load->dbutil();
    }
	
	public function index()
	{
        $this->install_1();
    }
	
	function install_1()
	{
        $this->_checkEnvironment();
	}

	function install_2()
	{
        $this->load->view('install/header');
        $this->load->view("install/install_2.php");
        $this->load->view('install/footer');
	}

	function install_3()
	{
        $this->load->view('install/header');
        $this->load->view("install/install_3.php");
        $this->load->view('install/footer');
	}

    function _checkEnvironment()
    {
        $checklist = array();
        $checklist['user_permission'] = symbolic_permissions(fileperms('./user'));
        $checklist['user_permission_check'] = false;
        $checklist['autoload_permission'] = symbolic_permissions(fileperms('./application/config/autoload.php'));
        $checklist['autoload_permission_check'] = false;
        $checklist['database_permission'] = symbolic_permissions(fileperms('./application/config/database.php'));
        $checklist['database_permission_check'] = false;


        $checklist['phpversion'] = phpversion();
        $checklist['phpversion_check'] = false;
       
        if( is_writable('./user') ) $checklist['user_permission_check'] = true;
        if( is_writable('./application/config/autoload.php') ) $checklist['autoload_permission_check'] = true;
        if( is_writable('./application/config/database.php') ) $checklist['database_permission_check'] = true;

        if( phpversion() >= '5.0.0' ) $checklist['phpversion_check'] = true;

        $data['checklist'] = $checklist;

        $this->load->view('install/header');
        $this->load->view('install/install_1.php',$data);
        $this->load->view('install/footer');
    }

    function setupDatabase()
    {
        $setup = array();

        $setup['db_hostname'] = $this->input->post('db_hostname');
        $setup['db_username'] = $this->input->post('db_username');
        $setup['db_password'] = $this->input->post('db_password');
        $setup['db_database'] = $this->input->post('db_database');

        $string = read_file('./application/views/install/database.txt');

        $data = array(
                        'db_hostname' => $setup['db_hostname'],
                        'db_username' => $setup['db_username'],
                        'db_password' => $setup['db_password'], 
                        'db_database' => $setup['db_database']
                    );

        $string = $this->parser->parse_string($string,$data);
        umask(0);
        write_file('./application/config/database.php', $string);
    	$this->_setupAutoload();

        redirect(base_url()."index.php/install/setupTables",'refresh');
    }
    function _setupAutoload()
    {
        $string = read_file('./application/views/install/autoload.txt');
        $data = array(
                        'session' => 'session',
                    );
        $string = $this->parser->parse_string($string,$data);
        
        umask(0);
        write_file('./application/config/autoload.php', $string);
    }

    public function setupTables()
    {
        $this->load->database();

        $this->_createTable('user');
        //$this->_insertData('user');
        $this->_createTable('coding_basic');
        $this->_insertData('coding_basic');
        $this->_createTable('coding_practice');
        $this->_insertData('coding_practice');
        $this->_createTable('coding_category');
        $this->_insertData('coding_category');
        $this->_createTable('coding_code');
        $this->_insertData('coding_code');
        $this->_createTable('reference');
        $this->_insertData('reference');
        $this->_createTable('board');
        //$this->_insertData('board');
        $this->_createTable('comment');
        //$this->_insertData('comment');
        $this->_createTable('ci_sessions');
        //$this->_insertData('ci_sessions');
        $this->_createTable('objective_quiz');
        $this->_insertData('objective_quiz');

        redirect(base_url()."index.php/install/install_3",'refresh');

    }

    function _createTable($name)
	{
        $this->load->model('install_model');

        $string = read_file('./icanc_database/'.$name.'_struct.txt');
	 	$this->install_model->run($string);
	}

    function _insertdata($name)
	{
        $this->load->model('install_model');
        $string = read_file('./icanc_database/'.$name.'_data.txt');
	 	$this->install_model->run($string);

	}

	function dropTable($name)
	{
		$this->dbforge->drop_table($name,TRUE);
        redirect(base_url()."index.php/install/install_3",'refresh');
	}



    function createDatabase()
    {
        $this->load->dbforge();
        $this->load->dbutil();

        if( $this->dbutil->database_exists('my_db') )
        {
            echo "drop my_db<br>";
        }
        else if( $this->dbforge->create_database('my_db') )
        {
            echo "create my_db";
        }
        $fields = array(
                'users' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    ),
                );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('users', TRUE);
        $this->dbforge->create_table('table_name');
    }


}

?>
