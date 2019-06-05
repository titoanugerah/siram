<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'user';
$route['userLogin'] = 'user/login';
$route['login'] = 'user/login';
$route['userHome'] = 'user/userHome';
$route['akunEdit'] = 'user/akunEdit';
$route['userLogout'] = 'user/userLogout';
//$route['userCreate'] = 'user/userCreate';
$route['informasiNode/(:any)'] = 'user/informasiNode/$1';
$route['dataTanah/(:any)'] = 'user/dataTanah/$1';
$route['dataSuhu/(:any)'] = 'user/dataSuhu/$1';
$route['dataDewPoint/(:any)'] = 'user/dataDewPoint/$1';
$route['dataUdara/(:any)'] = 'user/dataUdara/$1';
//$route['lihatProfil'] = 'user/lihatProfil';
$route['adminLogin'] = 'user/login';
$route['adminHome'] = 'admin/adminHome';
$route['adminEdit'] = 'admin/adminEdit';
$route['adminLogout'] = 'admin/adminLogout';
$route['createNode'] = 'admin/createNode';
$route['rekapNode'] = 'admin/rekapNode';
$route['node/(:any)'] = 'admin/node/$1';
$route['editNode/(:any)'] = 'admin/editNode/$1';
$route['deleteNode/(:any)'] = 'admin/deleteNode/$1';
$route['tanah/(:any)'] = 'admin/tanah/$1';
$route['suhu/(:any)'] = 'admin/suhu/$1';
$route['dewPoint/(:any)'] = 'admin/dewPoint/$1';
$route['udara/(:any)'] = 'admin/udara/$1';
$route['editUser/(:any)'] = 'admin/editUser/$1';
$route['deleteUser/(:any)'] = 'admin/deleteUser/$1';
$route['createUser'] = 'admin/createUser';
$route['rekapUser'] = 'admin/rekapUser';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>
