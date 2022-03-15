<?php
use Illuminate\Support\Facades\Route;
use modules\categories\Controller\categoryController;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/category',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , "auth" ]
    ], function(){ //...
    Route::get('/all' ,[categoryController::class,"index"])->name("category.index");
    Route::get('/add' ,[categoryController::class,"create"])->name("category.create");
    Route::post('/store' ,[categoryController::class,"store"])->name("category.store");
    Route::Post('/delete/{category}' ,[categoryController::class,"delete"])->name("category.delete");
    Route::get('/edit/{category}' ,[categoryController::class,"edit"])->name("category.edit");
    Route::Post('/update' ,[categoryController::class,"update"])->name("category.update");
});


