<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['loginact'] = 'portal/login';
$route['signupact'] = 'portal/savemember';
$route['signupadmact'] = 'portal/saveadmin';

$route['administrator'] = 'admin/admin_pages/view/dashboard';
$route['administrator/(:any)/(:num)/(:any)'] = 'admin/actioncrud/$1/$2/$3';
$route['administrator/(:any)/(:any)'] = 'admin/admin_pages/view_crud/$1/$2/null';
$route['administrator/(:any)/(:any)/(:any)'] = 'admin/admin_pages/view_crud/$1/$2/$3';//update dn delete page
$route['administrator/(:any)'] = 'admin/admin_pages/view/$1';


$route['(:any)'] = 'portal/portal_pages/view/$1';

$route['default_controller'] = 'portal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
