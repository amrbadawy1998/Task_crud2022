<?php

use Illuminate\Support\Facades\Route;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/user',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
    ], function(){ //...

    Route::get('/all' ,[\modules\users\Controller\userController::class,"index"])->name("user.index");
    Route::get('/add' ,[\modules\users\Controller\userController::class,"create"])->name("user.create");
    Route::post('/store' ,[\modules\users\Controller\userController::class,"store"])->name("user.store");
    Route::Post('/delete/{user}' ,[\modules\users\Controller\userController::class,"delete"])->name("user.delete");
    Route::get('/edit/{user}' ,[\modules\users\Controller\userController::class,"edit"])->name("user.edit");
    Route::Post('/update' ,[\modules\users\Controller\userController::class,"update"])->name("user.update");
});


