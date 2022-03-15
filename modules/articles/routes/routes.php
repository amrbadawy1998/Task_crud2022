<?php

use Illuminate\Support\Facades\Route;
use modules\articles\Controller\articleController;




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/artical',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , "auth" ]
    ], function(){ //...
    Route::get('/all' ,[articleController::class,"index"])->name("article.index");
    Route::get('/add' ,[articleController::class,"create"])->name("article.create");
    Route::post('/store' ,[articleController::class,"store"])->name("article.store");
    Route::Post('/delete/{article}' ,[articleController::class,"delete"])->name("article.delete");
    Route::get('/edit/{article}' ,[articleController::class,"edit"])->name("article.edit");
    Route::Post('/update' ,[articleController::class,"update"])->name("article.update");
});


