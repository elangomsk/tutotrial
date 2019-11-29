<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	


if ( ! function_exists('admin_redirect'))
{
    function admin_redirect($url = '')
    {
		return redirect('velankatgo/'.$url);
    }   
}
if ( ! function_exists('admin_url'))
{
    function admin_url($url = '')
    {
		return base_url('velankatgo/'.$url);
    }   
}

if ( ! function_exists('getLocation'))
{
    function getLocation($ip = '')
    {
    	if($ip == '::1' || $ip == 'localhost'){
    		$return = 'localhost';
    	}else{
    		$return = 'Malaysia';
    	}

		return $return;
    }   
}

if ( ! function_exists('user_agent'))
{
    function user_agent()
    {
		$CI =& get_instance();
	    $CI->load->library('user_agent');
	    if ($CI->agent->is_browser())
		{
		        $agent = $CI->agent->browser().' '.$CI->agent->version();
		}
		elseif ($CI->agent->is_robot())
		{
		        $agent = $CI->agent->robot();
		}
		elseif ($CI->agent->is_mobile())
		{
		        $agent = $CI->agent->mobile();
		}
		else
		{
		        $agent = 'Unidentified User Agent';
		}

		return $agent;
    }   
}

if(! function_exists('getBlockedIP')){
	function getBlockedIP(){
		$CI =& get_instance();
		$condition = array(
			"ip"=>$CI->input->ip_address(),
			"type" => 'Failed_login',
			"Date(`created_at`)" => date("Y-m-d"),
		);
	    $count = $CI->common_model->getTableData('admin_activity','',$condition,'','')->num_rows();
	    if($count == 3){
	    	return TRUE;
	    }else{
	    	return FALSE;
	    }
	}
}