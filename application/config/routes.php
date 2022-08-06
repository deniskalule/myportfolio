<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'pagecontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'PageController/about';
$route['projects'] = 'PageController/projects';
$route['services'] = 'PageController/services';
$route['blog'] = 'PageController/blog';