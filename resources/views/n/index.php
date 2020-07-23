<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/

// Define minimum supported PHP version
define('NucleusERP_PHP', '5.6.4');

// Check PHP version
if (version_compare(PHP_VERSION, NucleusERP_PHP, '<')) {
    die('Your host needs to use PHP ' . NucleusERP_PHP . ' or higher to run NucleusERP');
}

// Register the auto-loader
require(__DIR__.'/bootstrap/autoload.php');

// Load the app
$app = require_once(__DIR__.'/bootstrap/app.php');

// Run the app
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
