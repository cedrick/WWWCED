<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'][] = array(
	'class'    => 'ProfilerEnabler',
	'function' => 'EnableProfiler',
	'filename' => 'hooks.classes.php',
	'filepath' => 'hooks',
	'params'   => array()
);

//check if user was log in 
$hook['post_controller_constructor'][] = array(
	'class'    => 'User_check',
	'function' => 'is_login',
	'filename' => 'user_check.php',
	'filepath' => 'hooks',
	'params'   => array()
);



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */