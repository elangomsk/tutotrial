<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
    	parent::__construct(); // construct the Model class
    	$this->load->database();
    	$this->load->model('common_model');
    	$this->load->model('email_model');
    }

	public function index()
	{
		// if (!isset($_SERVER['PHP_AUTH_USER'])) {
		//     header('WWW-Authenticate: Basic realm="My Realm"');
		//     header('HTTP/1.0 401 Unauthorized');
		//     echo 'Text to send if user hits Cancel button';
		//     exit;
		// } else {
		//     echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
		//     echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
		// }

		// if (!isset($_SERVER['PHP_AUTH_USER']) && !isset($_SERVER['PHP_AUTH_PW'] )) {
		// 	header('WWW-Authenticate: Basic realm="My Realm"');
		//     header('HTTP/1.0 401 Unauthorized');		
		// }else{
			
		// 	echo "string";	
		// }
		try{



			$data['view'] = 'login';
			// throw new Exception('test');
			$this->load->view('admin/admin_template', $data);


		}catch(Exception $e){
			print "something went wrong, caught yah! n";
			var_dump($e->getMessage());
			die;
		}


		// $data['view'] = 'login';
		// $this->load->view('admin/admin_template', $data);
	}

	public function dashboard()
	{
		
		$data['view'] = 'dashboard';
		$this->load->view('admin/admin_template', $data);
	}

	public function form()
	{
		
		$data['view'] = 'form';
		$this->load->view('admin/admin_template', $data);
	}


	public function test(){

		$data['view'] = 'form';
		$this->load->view('admin/test');
	}



		
}
