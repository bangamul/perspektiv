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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about']					= 'front/about';
$route['blog']					= 'front/blog';
$route['vacancy']				= 'front/jobvacancy';
$route['staff']					= 'front/staff';
$route['contact']				= 'front/contact';

$route['website']				= 'front/website';
$route['mobile']				= 'front/mobile';
$route['design']				= 'front/design';
$route['photo']					= 'front/photo';
$route['seo']					= 'front/seo';
$route['consultant']			= 'front/consultant';

$route['portfolio']				= 'front/portfolio';
$route['portfolio/(:any)'] 		= "front/portfolio_detail/$1";

$route['news']					= 'front/news';
$route['news/(:any)'] 			= "front/news_detail/$1";

$route['quote']					= 'front/quote';
$route['request_form']			= 'front/request_form';

$route['mobilelegend']		= 'front/mobilelegend';
$route['pubgm']				= 'front/pubgm';
$route['codm']				= 'front/codm';

$route['session']			= 'front/session';
$route['family']			= 'front/family';
$route['personal']			= 'front/personal';
$route['product']			= 'front/product';
$route['rent']				= 'front/rent';
$route['prewed']			= 'front/prewed';
$route['wedding']			= 'front/wedding';
$route['booth']				= 'front/booth';
$route['other']				= 'front/other';
$route['order']				= 'front/order';

$route['detail/(:any)'] 	= "front/detail_project/$1";
