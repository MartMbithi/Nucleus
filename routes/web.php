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

Route::get('/', function () 
{
    //Home web route
    return view('index');
});

Route::get('/nucleus-erp-features', function ()
{
    //Features web route
    return view('features');
});

Route::get('/nucleus-erp-docs', function ()
{
    //docs web route
    return view('docs');
});

Route::get('/nucleus-erp-requirements', function ()
{
    return view('requirements-docs');
});

Route::get('/nucleus-erp-downloads-docs', function ()
{
    //download - docs web route
    return view('downloads-docs');
});

Route::get('/nucleus-erp-installation-docs', function ()
{
    return view('installation-docs');
});

Route::get('/nucleus-erp-dashboard-docs', function ()
{
    //dashboard - web route
    return view('dashboard-docs');
});

Route::get('/nucleus-erp-apps-docs', function ()
{
    //apps - docs web route
    return view('apps-docs');
});

Route::get('/nucleus-erp-user-docs', function ()
{
    //user-docs web route
    return view('user-docs');
});


Route::get('/nucleus-erp-faqs', function ()
{
    //faqs web route
    return view('faqs');
});

Route::get('/nucleus-erp-bill-no', function ()
{
    //faqs-bill number web routes
    return view('faqs-bill-no');
});

Route::get('/nucleus-erp-bills-payments', function ()
{
    //faqs-bill-payments web routes
    return view('faqs-bill-payments');
});

Route::get('/nucleus-erp-invoices', function ()
{
    return view('faqs-invoices');
});

Route::get('/nucleus-erp-community', function ()
{
    //community web routes
    return view('community');
});

Route::get('/nucleus-erp-about-us', function ()
{
    return view('about');
});

Route::get('/nucleus-erp-licences', function ()
{
    //license web routes
    return view('license');
});


Route::get('/nucleus-erp-contact', function ()
{
    //contact web routes
    return view('contact');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
