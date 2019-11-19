<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_Model extends CI_Model {

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
    }

	/* Comments
		To Send Email
		$to = End user
		$template  = select the template (Numeric)
		$message - Associative data
		
		if successfully send email return TRUE orherwise FALSE

	*/
	public function send_mail($to,$template,$message){

		$msg = 'TEST ###DATE### and Link on ###LINK###';

		$text = strtr($msg, $message);
		print_r($text);

		//$this->load->library('email');
		$config = Array( 
		  'protocol' => 'smtp', 
		  'smtp_host' => 'ssl://smtp.gmail.com', 
		  'smtp_port' => 465, 
		  'smtp_user' => '', 
		  'smtp_pass' => '',
		  'mailtype'  => 'html', 
    	  'charset'   => 'iso-8859-1'
		); 
		$config['mailtype'] = 'html';
		 $config['smtp_port']='465';
		 $config['smtp_timeout']='30';
		 $config['charset']='utf-8';
		 $config['protocol'] = 'smtp';
		 $config['mailpath'] = '/usr/sbin/sendmail';
		 $config['charset'] = 'iso-8859-1';
		 $config['wordwrap'] = TRUE;

		$this->load->library('email', $config); 
        $this->email->from('elangomsk@gmail.com', 'elangomsk');
        $this->email->to($to);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message($text);
        //Send mail
        if($this->email->send())
        	echo "Congragulation Email Send Successfully.";
            // $this->session->set_flashdata("email_sent","");
        else
        	print_r($this->email->print_debugger());
        	echo "You have encountered an error";
            // $this->session->set_flashdata("email_sent",);
		die;
	}
}
