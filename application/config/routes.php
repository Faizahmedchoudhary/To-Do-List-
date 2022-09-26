<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['validation'] = 'Form';

$route['completed'] = 'pages/completed';
$route['pending'] = 'pages/pending';
$route['today'] = 'pages/today';
$route['task'] = 'pages/showtask';
$route['edit'] = 'pages/edit';
$route['default_controller'] = 'pages/task';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
