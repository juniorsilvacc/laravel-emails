<?php

use App\Mail\ExampleMail;
use App\Mail\UserWelcome;
use App\Models\User;
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

Route::get('/test-email-markdown', function () {
    // return (new UserWelcome())->render();

    Mail::to('junior@example.com')
        ->send(new UserWelcome());

    return 'ok';
});

Route::get('/test-email', function () {
    // return (new ExampleMail([]))->render();
    $user = User::factory()->create();

    Mail::to('test@example.com')
        ->send(new ExampleMail($user));

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
