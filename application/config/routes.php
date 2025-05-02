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
$route['api-abc/v1/data-cetak'] = 'api/abc_data_cetak';
$route['api-abc/v1/data-pemasukan'] = 'api/abc_pemasukan';
$route['api-abc/v1/data-pengeluaran'] = 'api/abc_pengeluaran';

$route['api-sincom/v1/data-cetak'] = 'api/express_data_cetak';
$route['api-sincom/v1/data-pemasukan'] = 'api/express_pemasukan';
$route['api-sincom/v1/data-pengeluaran'] = 'api/express_pengeluaran';

$route['api-nagoya/v1/data-cetak'] = 'api/nagoya_data_cetak';
$route['api-nagoya/v1/data-pemasukan'] = 'api/nagoya_pemasukan';
$route['api-nagoya/v1/data-pengeluaran'] = 'api/nagoya_pengeluaran';

$route['home'] = 'data/home';

$route['abc/data-cetak'] = 'abc/order';
$route['abc/data-pemasukan'] = 'abc/kas';
$route['abc/data-pengeluaran'] = 'abc/pengeluaran_view';

$route['nagoya/data-cetak'] = 'nagoya/order';
$route['nagoya/data-pemasukan'] = 'nagoya/kas';
$route['nagoya/data-pengeluaran'] = 'nagoya/pengeluaran_view';

$route['sincom/data-cetak'] = 'express/order';
$route['sincom/data-pemasukan'] = 'express/kas';
$route['sincom/data-pengeluaran'] = 'express/pengeluaran_view';

$route['mpi/data-cetak'] = 'mpi/order';
$route['mpi/data-pemasukan'] = 'mpi/kas';
$route['mpi/data-pengeluaran'] = 'mpi/pengeluaran_view';

$route['pos/data-cetak'] = 'pos/order';
$route['pos/data-pemasukan'] = 'pos/kas';
$route['pos/data-pengeluaran'] = 'pos/pengeluaran_view';



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
