<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

	function __construct()
    {
    	parent::__construct(); // construct the Model class
    	$this->load->database();
    }

	/* Comments
		To Send Email
		$table = To select the table
		$selectedValue  = select the perticular column (string)
		$where - Associative array data
		$orderby - Associative array data
		$limit - Numeric value
		
		It returns table data's
	*/

	public function getTableData($table,$selectedValue,$where,$orderby,$limit){
			if($selectedValue != ''){
				$this->db->select($selectedValue);
			}

			if(isset($where) && !empty($where)){
				$this->db->where($where);
			}

			$this->db->order_by($orderby);
			if(!empty($limit)){
				$this->db->limit($limit);
			}
			$this->db->from($table);
			$query = $this->db->get();
			return $result = $query->result();
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
	/* Comments
		To Insert Table Data
		$table = Table Name
		$data  = Associative data
			
		if successfully updated return TRUE orherwise FALSE

	*/
	public function InsertTableData($table,$data){
		return ($this->db->insert($table, $data))  ?   $this->db->insert_id()  :   false;
	}
	/* Comments
		To Update Table Data
		$table = Table Name
		$data  = Associative data
		$where  = Associative data
		
		if successfully updated return TRUE orherwise FALSE

	*/	
	public function UpdateTableData($table,$data,$where){
		if(isset($where) && !empty($where)){
				$this->db->where($where);
		}
		$this->db->update($table, $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE; 
	}

	function dateDiff($date)
	{
	  $seconds  = strtotime(date('Y-m-d H:i:s')) - strtotime($date);

        $months = floor($seconds / (3600*24*30));
        $day = floor($seconds / (3600*24));
        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours*3600)) / 60);
        $secs = floor($seconds % 60);

        if($seconds < 60)
            $time = $secs." seconds ago";
        else if($seconds < 60*60 )
            $time = $mins." min ago";
        else if($seconds < 24*60*60)
            $time = $hours." hours ago";
        else if($seconds < 24*60*60)
            $time = $day." day ago";
        else
            $time = $months." month ago";

        return $time;

	}
}
