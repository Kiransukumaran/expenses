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
/* Codeigniter Routing*/
$route['default_controller'] = 'Homepage/home';
$route['404_override'] = 'Errors/index';

/* User Management */
$route['login'] = 'Homepage/login';
$route['logout'] = 'Homepage/logout';

/*Home Pages routing */
$route['dashboard'] = 'Expense/home';
$route['admin'] = 'Expense/adminHome';

/* SPPD Routing*/
$route['viewsppd'] = 'Expense/viewDataSppd';
$route['ang'] = 'Angularjs/get_list';
$route['get'] = 'Expense/getData';
$route['getemp'] = 'Expense/getDataEmp';

/* Cuti Routing */
$route['cutiemp'] = 'Expense1/getDataEmp';
$route['viewcuti'] = 'Expense/viewDataCuti';
$route['getcuti'] = 'Expense1/getData';
$route['ang1'] = 'Angularjs/get_list_cuti';

/* PDF Routing */
$route['spdf'] = 'PDF/sppdPDF';
$route['cpdf'] = 'PDF/cutiPDF';

/* Thank you page */
$route['thanku'] = 'Expense/thank';
$route['thankyou'] = 'Expense1/thank';
$route['email'] = 'Email/index';



$route['translate_uri_dashes'] = FALSE;
