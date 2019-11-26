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
    	$this->load->helper('common_helper');
    	$this->load->library('encryption');
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
		// $data['view'] = 'login';
				// throw new Exception('test');
				// $this->load->view('admin/admin_template', $data);
				// die;
		try{
			// echo $this->encryption->encrypt('12345');
			// echo $this->encryption->decrypt('4000877d1ede0aee205cc8c3f64cace6004f91ef727b166fa1da8eba260fa7260de98e1bf67b4daed6f32081c9cf7e316b555b31c4684605038784e6877a9997J3vUDvqA9JkKNEaL5TWHKPPce1PyjBdVT4Iv64iozek=');
			// die;
			$admin_id = $this->session->userdata('logged_in');
			if($admin_id != ''){
				admin_redirect('dashboard');

			}
			if($this->input->post()){
				$this->form_validation->set_rules('Username', 'Username', 'trim|required|xss_clean');
				$this->form_validation->set_rules('Password', 'Password', 'trim|required|xss_clean');

				if ($this->form_validation->run() == TRUE) {
					$username = $this->input->post('Username');
					$password = $this->input->post('Password');
					$where = array('id'=>1);
					$result = $this->common_model->getTableData('owner','',$where,'','');
					$check_login = $result->num_rows();
					
					if($check_login > 0){
						$response = $result->row();
						$Uname = $this->encryption->decrypt($response->site_owner);
						$pass  = $this->encryption->decrypt($response->password);
						$logged_in  = $response->id;

						if($username === $Uname && $password === $pass){
							$newdata = array(
							    'logged_in' => $logged_in
							);

							$this->session->set_userdata($newdata);
							$this->session->set_flashdata('sucesss', "Login Sucesss");
							admin_redirect('dashboard');
						}else{
							$this->session->set_flashdata('error', "Invalid user credentials");
							admin_redirect();
						}
						
					}else{
						$this->session->set_flashdata('error', "Invalid user credentials");
						admin_redirect();
					}

				}else{
					$this->session->set_flashdata('error', validation_errors('<div class="error">', '</div>'));
					admin_redirect();
				}	
			}else{
				$data['view'] = 'login';
				$this->load->view('admin/admin_template', $data);
				
			}
		}catch(Exception $e){
			var_dump($e->getMessage());
			die;
		}
	}

	public function dashboard()
	{
		try{
			$admin_id = $this->session->userdata('logged_in');		
			if(!empty($admin_id)){
				$data['view'] = 'dashboard';
				$this->load->view('admin/admin_template', $data);
			}else{
				$this->session->set_flashdata('error','Login first');
				admin_redirect();
			}
		}catch(Exception $e){
			var_dump($e->getMessage());
			die;	
		}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->set_flashdata('success','Logout Sucesssfully.');
		admin_redirect();
	}

	public function site_settings()
	{
		
		$data['view'] = 'form';
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
