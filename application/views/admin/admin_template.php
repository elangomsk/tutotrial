<?php 
$this->load->view('admin/layout/header');
$admin_id = $this->session->userdata('logged_in');
if(!empty($admin_id)){
	$this->load->view('admin/layout/sidebar');
}

if(isset($view)){
	$this->load->view('admin/'.$view);
}
if(!empty($admin_id)){
	$this->load->view('admin/layout/footer');
}
die;
?>
