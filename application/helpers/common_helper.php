<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	


if ( ! function_exists('encrypt1'))
{
    function encrypt1($var = '')
    {
	$CI =& get_instance();
        return $CI->encrypt->encode($var);
    }   
}