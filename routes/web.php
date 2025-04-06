<?php

use Illuminate\Support\Facades\Route;
use App\Services\LinkedInProfileService;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {

    return view('index');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('linkedin-openid')
    ->redirect();
})->name('auth');
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('linkedin-openid')->user();
 
    dd($user);
    // $user->token
});
