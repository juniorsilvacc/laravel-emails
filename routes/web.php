<?php

use App\Mail\ExampleMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test-email', function () {
    return (new ExampleMail([]))->render();
    Mail::to('test@example.com')
        ->send(new ExampleMail([]));

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
