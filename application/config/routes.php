<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "solution";
$route['404_override'] = '';

$route['about'] = 'about/index';
$route['new-post'] = 'solution/create';
$route['post/(:num)'] = 'solution/view/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */