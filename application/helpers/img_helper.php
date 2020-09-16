<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
function img($text)
{
    $text = '<center><img src="'.base_url().'/assets/uploads/'.$text.'" style="width:80px;"></center>';
    return $text;
}

?>