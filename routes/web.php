<?php

use App\Http\Livewire\Account\Accsettings;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;
use App\Models\DiscordVerification;

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


/* AUTHENTICATION */

Route::get('/login', App\Http\Livewire\Login::class)->name('login');
Route::get('/register', App\Http\Livewire\Register::class)->name('register');

Route::get('/test', [App\Http\Controllers\LoginAuthenticationController::class, 'authenticate']);
Route::get('/verifydiscord', [App\Http\Controllers\DiscordVerificationController::class, 'index']);
Route::get('/discorddata', [App\Http\Controllers\DiscordVerificationController::class, 'getdata']);

Fortify::verifyEmailView(function () {
    return view('auth.verify-email');
});

Route::get('/verify/{id}', [App\Http\Controllers\VerificationController::class, 'render']);
Route::post('/verify', [App\Http\Controllers\VerificationController::class, 'check_bot']);

Route::get('/checkid/{id}', function($id)
{

    if(DiscordVerification::where('discord_id', $id)->get()->count() == 1) {
        $obj = (object) [
            'found' => true
        ];
    } else {
        $obj = (object) [
            'found' => false,
            'result' => DiscordVerification::where('discord_id', $id)->get()->count()
        ];
    }
    

    return json_encode($obj);
});

Route::get('/apiping', function()
{
    $obj = (object) [
        'name' => 'LynxAPI',
        'version' => null,
        'impactversion' => 1.1,
        'pingstatus' => 2500
    ];
    

    return json_encode($obj);
});

/* IMPACT */

Route::get('/', App\Http\Livewire\Frontpage::class);
Route::get('/dashboard', App\Http\Livewire\Dashboard\Dashboard::class)->middleware('auth');
Route::get('/account/settings', App\Http\Livewire\Account\Accsettings::class)->middleware('auth');
