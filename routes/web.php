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


Route::group(["namespace" => "App\Http\Controllers"], function () {
    /*
     * Home Routes
     */
    Route::get("/", "HomeController@index")->name("home.index");

    Route::group(["middleware" => ["auth"]], function () {
        /*
         * Register Routes
         */
        Route::get("/register", "auth\RegisterController@show")->name("register.show");
        Route::post("/register", "auth\RegisterController@register")->name("register.perform");

        /*
         * Login Routes
         */
        Route::get("/login","auth\LoginController@show")->name("login.show");
        Route::post("/login","auth\LoginController@login")->name("login.perform");
    });

    Route::group(["middleware"=>["auth"]],function(){
    /*
     * Logout Routes
     */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
