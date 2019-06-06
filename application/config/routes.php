<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'user';
$route['login'] = 'account/login';
$route['dashboard'] = 'account/dashboard';
$route['logout'] = 'account/logout';
$route['profile'] = 'account/profile';

$route['user'] = 'admin/user';
$route['detailUser/(:any)'] = 'admin/detailUser/$1';
$route['node'] = 'admin/node';

$route['detailNode/(:any)'] = 'admin/detailNode/$1';

$route['informasiNode/(:any)'] = 'user/informasiNode/$1';
$route['dataTanah/(:any)'] = 'user/dataTanah/$1';
$route['dataSuhu/(:any)'] = 'user/dataSuhu/$1';
$route['dataDewPoint/(:any)'] = 'user/dataDewPoint/$1';
$route['dataUdara/(:any)'] = 'user/dataUdara/$1';
//$route['lihatProfil'] = 'user/lihatProfil';
//$route['adminLogin'] = 'account/login';
$route['createNode'] = 'admin/createNode';
$route['editNode/(:any)'] = 'admin/editNode/$1';
$route['deleteNode/(:any)'] = 'admin/deleteNode/$1';
$route['tanah/(:any)'] = 'admin/tanah/$1';
$route['suhu/(:any)'] = 'admin/suhu/$1';
$route['dewPoint/(:any)'] = 'admin/dewPoint/$1';
$route['udara/(:any)'] = 'admin/udara/$1';
$route['deleteUser/(:any)'] = 'admin/deleteUser/$1';
$route['createUser'] = 'admin/createUser';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>
