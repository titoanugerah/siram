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
//READY TO TRASH
$route['informasiNode/(:any)'] = 'user/informasiNode/$1';
$route['dataTanah/(:any)'] = 'user/dataTanah/$1';
$route['dataSuhu/(:any)'] = 'user/dataSuhu/$1';
$route['dataDewPoint/(:any)'] = 'user/dataDewPoint/$1';
$route['dataUdara/(:any)'] = 'user/dataUdara/$1';
$route['createNode'] = 'admin/createNode';
$route['editNode/(:any)'] = 'admin/editNode/$1';
$route['deleteNode/(:any)'] = 'admin/deleteNode/$1';
$route['tanah/(:any)'] = 'admin/tanah/$1';
$route['suhu/(:any)'] = 'admin/suhu/$1';
$route['dewPoint/(:any)'] = 'admin/dewPoint/$1';
$route['udara/(:any)'] = 'admin/udara/$1';

#SYSTEM PURPOSE
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>
