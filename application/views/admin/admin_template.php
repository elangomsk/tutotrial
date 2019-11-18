<?php 
$this->load->view('admin/layout/header');

$this->view('admin/layout/sidebar');

if(isset($view)){
	$this->load->view('admin/'.$view);
}

$this->view('admin/layout/footer');
?>
