<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
// This route will go into the 'last' folder and look for 'last'
$route['last'] = "last/last";
// this route will go to the 'first' folder and look for 'zzz'
$route['sleep'] = "first/zzz";
// this route will see if an address matches 'lock' as the first word, and any
// two words after
$route['lock/:any/:any'] = 'welcome/shucks';
// this route matches the word 'show' and any number after will be stored
// in order to use it in the function 'gimme()'
$route['show/(:num)'] = 'first/gimme/$1';
$route['dunno'] = 'guess';
// regex: any 4 letters/bingo are valid; go to bingo/index()
$route['([a-zA-Z]{4})/bingo'] = 'bingo';
// comp and any 4 numbers are valid/anything is valid; go to bingo/wisdom()
$route['(comp[0-9]{4})/:any'] = 'bingo/wisdom';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */