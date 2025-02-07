<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Login';
$route['error/(:any)'] = 'Welcome/customError/$1';
$route['dashboard'] = 'Dashboard/index';
$route['logout'] = 'Dashboard/logout';

$route['category-list'] = 'Category/index';
$route['category-add'] = 'Category/add';
$route['category-edit/(:any)'] = 'Category/add/$1';

$route['sub-category-list'] = 'SubCategory/index';
$route['sub-category-add'] = 'SubCategory/add';
$route['sub-category-edit/(:any)'] = 'SubCategory/add/$1';

$route['product-list'] = 'Product/index';
$route['product-add'] = 'Product/add';
$route['product-edit/(:any)'] = 'Product/add/$1';

$route['cms-list'] = 'Cms/index';
$route['cms-add'] = 'Cms/add';
$route['cms-edit/(:any)'] = 'Cms/add/$1';

$route['home-slider-list'] = 'HomeSlider/list';
$route['home-slider-add'] = 'HomeSlider/add';
$route['home-slider-edit/(:any)'] = 'HomeSlider/add/$1';

$route['inquiry-list'] = 'ContactInquiry/inquiryList';
$route['dealer-inquiry-list'] = 'DealerInquiry/inquiryList';
$route['vendor-inquiry-list'] = 'VendorInquiry/inquiryList';
$route['site-setting'] = 'SiteSetting/siteSetting';
$route['change-password'] = 'Dashboard/changePassword';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
