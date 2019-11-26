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
// if ( ! function_exists('decrypt'))
// {
//     function decrypt($var = '')
//     {
// 		$CI =& get_instance();
// 	    $CI->load->library('encryption');
//         return $CI->encryption->decrpt($var);
//     }   
// }