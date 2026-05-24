<?php

use App\Http\Controllers\Admin\Customer\Crud\CustomerCrudController;
use Illuminate\Support\Facades\Route;
//vpx_imports
Route::prefix('admin')->group(function(){
    Route::resource('customer',CustomerCrudController::class)->except(['destroy', 'show']);
    Route::post('customer/list',[CustomerCrudController::class,'list']);
    Route::post('customer/delete-list',[CustomerCrudController::class,'deleteList']);
    Route::post('customer/update-list',[CustomerCrudController::class,'updateList']);
    //vpx_attach
});
