<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/nucleus-erp-features', function ()
{
    return view('features');
});

Route::get('/nucleus-erp-docs', function ()
{
    return view('docs');
});

Route::get('/nucleus-erp-requirements', function ()
{
    return view('requirements-docs');
});

Route::get('/nucleus-erp-downloads-docs', function ()
{
    return view('downloads-docs');
});

Route::get('/nucleus-erp-installation-docs', function ()
{
    return view('installation-docs');
});

Route::get('/nucleus-erp-dashboard-docs', function ()
{
    return view('dashbaord-docs');
});

Route::get('/nucleus-erp-apps-docs', function ()
{
    return view('apps-docs');
});

Route::get('/nucleus-erp-user-docs', function ()
{
    return view('user-docs');
});

