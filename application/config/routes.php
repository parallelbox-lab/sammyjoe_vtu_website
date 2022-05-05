<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Main';
$route['login'] = 'Account/login';
$route['forget-password'] = 'Account/forget_password';
$route['signup'] = 'Account/signup';
$route['resetlink'] = 'Account/resetlink';
$route['logout'] = 'Account/logout';

$route['dashboard'] = 'Dashboard';
$route['dashboard/fund-wallet'] = 'Dashboard/fundwallet';
$route['dashboard/success/(.+)'] = 'Paystack/success/$1';
$route['dashboard/airtime'] = 'Dashboard/airtime';
$route['dashboard/cabletv'] = 'Dashboard/cabletv';
$route['dashboard/cabletv/dstv'] = 'Dashboard/dstv';
$route['dashboard/cabletv/gotv'] = 'Dashboard/gotv';
$route['dashboard/cabletv/startimes'] = 'Dashboard/startimes';
$route['dashboard/electricity'] = 'Dashboard/elect';
$route['dashboard/data-bundle'] = 'Dashboard/databundle';
$route['dashboard/transaction'] = 'Dashboard/transaction';
$route['dashboard/edit-profile'] = 'Dashboard/editprofile';
$route['dashboard/update-password'] = 'Dashboard/change_pass';
$route['dashboard/transaction'] = 'Dashboard/transaction';
$route['dashboard/waec-pin'] = 'Dashboard/waec';
$route['dashboard/spectranet'] = 'Dashboard/spectranet';
$route['errorpayment'] = 'Paystack/error';

// admin section
$route['cw3admin'] = 'Admin/home';
$route['cw3admin/users'] = 'Admin/users';
$route['cw3admin/manage-products'] = 'Admin/all_bundle';
$route['cw3admin/fund'] = 'admin/fund';
$route['cw3admin/add-bundle'] = 'admin/add_bundle';
$route['cw3admin/edit-bundle'] = 'admin/edit_bundle';
$route['cw3admin/delete-bundle'] = 'admin/delete_bundle';
$route['cw3admin/users-balance'] = 'admin/user_balance';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
