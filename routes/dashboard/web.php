<?php 

Route::prefix('dashboard')->name('dashboard.')->group(function(){


    Route::get('/check',function(){
        return "hello world";
    });
 
}); ## end of dashboard routes