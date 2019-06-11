<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#ACCOUNT AREA
$route['default_controller'] = 'account';
$route['login'] = 'account/login';
$route['dashboard'] = 'account/dashboard';
$route['logout'] = 'account/logout';
$route['profile'] = 'account/profile';

#ADMIN AREA
$route['user'] = 'admin/user';
$route['detailUser/(:any)'] = 'admin/detailUser/$1';
$route['node'] = 'admin/node';
$route['detailNode/(:any)'] = 'admin/detailNode/$1';
$route['comodity'] = 'admin/comodity';
$route['detailComodity/(:any)'] = 'admin/detailComodity/$1';
$route['deleteDataset/(:any)'] = 'admin/deleteDataset/$1';

#USERAREA
$route['detailUserNode/(:any)'] = 'user/detailUserNode/$1';

//READY TO TRASH

#SYSTEM PURPOSE
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>
