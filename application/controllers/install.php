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
        $this->_checkEnvironment();
    }
    public function copyTable()
    {
        $this->load->model('install_model');
        $string = read_file('./application/views/install/reference.txt');
        $this->install_model->setupTable($string);
    }
    public function nextStep($arg)
    {
        $this->load->view('install/header');
        $this->load->view("install/install_$arg.php");
        $this->load->view('install/footer');
    }
    function _checkEnvironment()
    {
        $checklist = array();
        $checklist['permission'] = symbolic_permissions(fileperms('./'));
        $checklist['permission_check'] = false;
        $checklist['phpversion'] = phpversion();
        $checklist['phpversion_check'] = false;
       
        if( is_writable('./') ) $checklist['permission_check'] = true;
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
        $this->db->reconnect();

        $this->_createUserTable();
        $this->_createSessionTable();
        $this->_createReferenceTable();
        $this->_createCodeTable();
        $this->_createQuizTable();
        $this->_createBoardTable();
        $this->_setupAutoload();

        redirect(base_url()."index.php/main",'refresh');
    }

    public function _createUserTable()
    {
        
        $fields = array(
                'id' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    ),
                'email' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '50',
                    'collation' => 'utf8_general_ci',
                    ),
                'nickname' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '20',
                    'collation' => 'utf8_general_ci',
                    ),
                'job' => array(
                    'type' =>'INT',
                    ),
                'dateOfBirth' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '10',
                    'collation' => 'utf8_general_ci',
                    ),
                'password' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '255',
                    'collation' => 'utf8_general_ci',
                    ),
                'created' => array(
                    'type' =>'datetime',
                    ),
                );


        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user',TRUE);
    }

    public function _createSessionTable()
    {
        
        $fields = array(
                'session_id' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '40',
                    'collation' => 'utf8_general_ci',
                    'default' => '0',
                    ),
                'ip_address' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '16',
                    'collation' => 'utf8_general_ci',
                    'default' => '0',
                    ),
                'user_agent' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '120',
                    'collation' => 'utf8_general_ci',
                    ),
                'last_activity' => array(
                    'type' =>'INT',
                    'constraint' => '10',
                    'default' => '0',
                    'unsigned' => TRUE,
                    ),
                'user_data' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                );


        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('session_id', TRUE);
        $this->dbforge->create_table('ci_sessions',TRUE);
    }
    
    public function _createReferenceTable()
    {
        
        $fields = array(
                'srl' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    ),
                'name' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '30',
                    'collation' => 'utf8_general_ci',
                    ),
                'code' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'header' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '255',
                    'collation' => 'utf8_general_ci',
                    ),
                'form' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '255',
                    'collation' => 'utf8_general_ci',
                    ),
                'parameter' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '255',
                    'collation' => 'utf8_general_ci',
                    ),
                'return' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '255',
                    'collation' => 'utf8_general_ci',
                    ),
                'tip' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'result' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                );


        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('srl', TRUE);
        $this->dbforge->create_table('reference',TRUE);
    }
 
    function _createCodeTable()
    {
        $fields = array(
                'id' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    ),
                'threadCodeHead' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'threadCodeTail' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'mainCodeHead' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'mainCodeTail' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                );


        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('coding_code',TRUE);
    }
    
    function _createQuizTable()
    {
        
        $fields = array(
                'id' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    ),
                'question' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '255',
                    'collation' => 'utf8_general_ci',
                    ),
                'answer' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '255',
                    'collation' => 'utf8_general_ci',
                    ),
                'head' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'tail' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'description' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'category' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'hint' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('coding_quiz',TRUE);
    }

    function _createBoardTable()
    {
        $fields = array(
                'srl' => array(
                    'type' => 'INT',
                    'auto_increment' => true,
                    ),
                'title' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '255',
                    'collation' => 'utf8_general_ci',
                    ),
                'writer' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '50',
                    'collation' => 'utf8_general_ci',
                    ),
                'created_time' => array(
                    'type' =>'DATETIME',
                    ),
                'modified_time' => array(
                    'type' =>'DATETIME',
                    ),
                'hits' => array(
                    'type' =>'INT',
                    ),
                'is_deleted' => array(
                    'type' =>'TINYINT',
                    'constraint' => '1',
                    ),
                'is_blind' => array(
                    'type' =>'TINYINT',
                    'constraint' => '1',
                    ),
                'is_closed' => array(
                    'type' =>'TINYINT',
                    'constraint' => '1',
                    ),
                'is_notice' => array(
                    'type' =>'TINYINT',
                    'constraint' => '1',
                    ),
                'text' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'tail' => array(
                    'type' =>'TEXT',
                    'collation' => 'utf8_general_ci',
                    ),
                'goods' => array(
                    'type' =>'INT',
                    ),
                'board_name' => array(
                    'type' =>'INT',
                    ),
                'group_id' => array(
                    'type' =>'INT',
                    ),
                'reply_cnt' => array(
                    'type' =>'INT',
                    ),
                'reply_srl' => array(
                    'type' =>'INT',
                    ),
                );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('srl', TRUE);
        $this->dbforge->create_table('board',TRUE);
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
