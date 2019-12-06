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
    	date_default_timezone_set("Asia/Kuala_Lumpur");
    	if(getBlockedIP() == TRUE){
    		echo "Your ip has been blocked";
    		die;
    	}
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
						$last_logged_at  = $response->logged_at;

						if($username === $Uname && $password === $pass){
							$newdata = array(
							    'logged_in' => $logged_in,
							    'logged_at' => $last_logged_at
							);

							$this->session->set_userdata($newdata);
							$updatedata = array(
								"logged_at" => date('Y-m-d h:i:s'),
							);
							$record = $this->common_model->UpdateTableData('owner',$updatedata,$where);
							$ip  = $this->input->ip_address();
							$insertData = array(
								'type' => 'login Sucesss', 
								'message' => 'Sucesssfully logged in', 
								'ip' => $ip, 
								'user_agent' => user_agent(),
								'location' => getLocation($ip),
							);

							$record = $this->common_model->insertTableData('admin_activity',$insertData);
							$this->session->set_flashdata('sucesss', "Login Sucesss");
							admin_redirect('dashboard');
						}else{
							$ip  = $this->input->ip_address();
							
							$condition = array(
								'Date(`created_at`)' => date("Y-m-d")
							);
							$check_count = $this->common_model->getTableData('admin_activity','',$condition,'','');
							$check_ip_count = $check_count->num_rows();
							$max_count = 3; 
							if($check_ip_count < $max_count){
								
								$insertData = array(
									'type' => 'Failed_login', 
									'message' => 'Wrong Login attempt', 
									'ip' => $ip, 
									'user_agent' => user_agent(),
									'location' => getLocation($ip),
								);

								$record = $this->common_model->insertTableData('admin_activity',$insertData);
								if(!empty($record)){
									$check_count = $this->common_model->getTableData('admin_activity','',$condition,'','');
									$check_ip_count = $check_count->num_rows();
									$attempt = $max_count - $check_ip_count;
									if($attempt != 0){
										$this->session->set_flashdata('error', "Invalid user credentials and remaining login attempt will be ".$attempt);
										admin_redirect();
									}else{
										$this->session->set_flashdata('error', "Blocked ip");
										admin_redirect();
									}
								}else{
									$this->session->set_flashdata('error', "Something went to Wrong");
									admin_redirect();
								}
							}else{
								//blocking page
								$this->session->set_flashdata('error', "blocking page");
								admin_redirect();
							}
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
		$this->session->unset_userdata('logged_at');
		$this->session->set_flashdata('success','Logout Sucesssfully.');
		admin_redirect();
	}

	public function site_settings()
	{
		try{
			$admin_id = $this->session->userdata('logged_in');		
			if(empty($admin_id)){
				admin_redirect('login');
			}
			if($this->input->post()){
				$site_username = $this->input->post('username');
				$site_undermaintance = $this->input->post('site_undermaintance');
				$site_und_content = $this->input->post('site_und_content');
				if(isset($site_undermaintance)){
					echo "string";
				}
				print_r($this->input->post());
				die;
			}


			$data['view'] = 'site_settings';
			$this->load->view('admin/admin_template', $data);
		}catch(Exception $e){

		}
	}
	public function cms($id=''){
		try{
			$admin_id = $this->session->userdata('logged_in');		
			if(empty($admin_id)){
				admin_redirect('login');
			}
			$display ='view';
			$data['result'] = $this->common_model->getTableData('cms','','','','')->result_array();
			if(isset($id) && !empty($id)){
				$display = 'edit';
				$where = array('link'=> $id);
				$data['result'] = $this->common_model->getTableData('cms','',$where,'','')->row();
			}
			$data['display'] =$display;
			$data['view'] =  'cms';
			$this->load->view('admin/admin_template', $data);
		}catch(Exception $e){

		}

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
