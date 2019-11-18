<?php 
$this->load->view('admin/layout/header');

if(isset($view)){
	$this->load->view('admin/'.$view);
}

$this->view('admin/layout/footer');
?>
