<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Inicio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//acount routes
//      path                    controller -> method
$route['acount'] = 'Acount';
$route['acount/form'] = 'acount/getform';
$route['acount/registrar']['post']="acount/registrar";
$route['acount/edit/(:any)'] = 'acount/edit/$1';
$route['acountupdate/(:any)']['post']="acount/update/$1";
$route['acountdelete/(:any)']['delete']="acount/delete/$1";
// end acount routes

$route['about'] = 'About';

//login
$route['login'] = 'Login';
$route['loginvalidate'] = 'login/validate';

//autos routes
$route['auto'] = 'Auto';
$route['auto/form/(:any)'] = 'auto/form/$1';
$route['autocreate']['post']="auto/create";
$route['autoupdate/(:any)']['post']="auto/update/$1";
$route['autodelete/(:any)']['delete']="auto/delete/$1";
$route['auto/delete/(:any)']['delete']="auto/delete/$1";
// $route['productsCreate']['post']="products/store";
