<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//$route['default_controller'] = 'welcome';
//$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;


// $route['default_controller'] = 'auth/login';
// $route['auth/login'] = 'auth/login';
// $route['auth/register'] = 'auth/register';
// $route['auth/do_login'] = 'auth/do_login';
// $route['auth/do_register'] = 'auth/do_register';
// $route['auth/logout'] = 'auth/logout';
// $route['blog/index'] = 'blog/index';
// $route['blog/create'] = 'blog/create';
// $route['blog/store'] = 'blog/store';
// $route['blog/edit/(:num)'] = 'blog/edit/$1';
// $route['blog/update/(:num)'] = 'blog/update/$1';
// $route['blog/delete/(:num)'] = 'blog/delete/$1';


// $route['auth/register'] = 'auth/register';
// $route['auth/login'] = 'auth/login';
// $route['auth/admin_login'] = 'auth/admin_login';
// $route['auth/logout'] = 'auth/logout';
// $route['default_controller'] = 'auth/register'; // Change as necessary
//$route['category'] = 'category/index';
//$route['category/create'] = 'category/create';
//$route['category/edit/(:num)'] = 'category/edit/$1';
//$route['category/delete/(:num)'] = 'category/delete/$1';
//$route['post'] = 'post/index';
//$route['post/create'] = 'post/create';
//$route['post/edit/(:num)'] = 'post/edit/$1';
//$route['post/delete/(:num)'] = 'post/delete/$1';

// $route['admin'] = 'admin/index';
// $route['admin/manage_users'] = 'admin/manage_users';
// $route['admin/create_user'] = 'admin/create_user';
// $route['admin/edit_user/(:num)'] = 'admin/edit_user/$1';
// $route['admin/delete_user/(:num)'] = 'admin/delete_user/$1';

// $route['admin/manage_posts'] = 'admin/manage_posts';
// $route['admin/create_post'] = 'admin/create_post';
// $route['admin/edit_post/(:num)'] = 'admin/edit_post/$1';
// $route['admin/delete_post/(:num)'] = 'admin/delete_post/$1';

// $route['admin/manage_categories'] = 'admin/manage_categories';
// $route['admin/create_category'] = 'admin/create_category';
// $route['admin/edit_category/(:num)'] = 'admin/edit_category/$1';
// $route['admin/delete_category/(:num)'] = 'admin/delete_category/$1';


// <?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// 
// Default controller
$route['default_controller'] = 'auth/register';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth routes
$route['auth/login'] = 'auth/login';
$route['auth/admin_login'] = 'auth/admin_login';
$route['auth/register'] = 'auth/register';
$route['auth/logout'] = 'auth/logout';

// Admin routes
$route['admin/dashboard'] = 'admin/index';
$route['admin/manage_users'] = 'admin/manage_users';
$route['admin/create_user'] = 'admin/create_user';
$route['admin/edit_user/(:num)'] = 'admin/edit_user/$1';
$route['admin/delete_user/(:num)'] = 'admin/delete_user/$1';

$route['admin/manage_posts'] = 'admin/manage_posts';
$route['admin/create_post'] = 'admin/create_post';
$route['admin/edit_post/(:num)'] = 'admin/edit_post/$1';
$route['admin/delete_post/(:num)'] = 'admin/delete_post/$1';

$route['admin/manage_categories'] = 'admin/manage_categories';
$route['admin/create_category'] = 'admin/create_category';
$route['admin/edit_category/(:num)'] = 'admin/edit_category/$1';
$route['admin/delete_category/(:num)'] = 'admin/delete_category/$1';
