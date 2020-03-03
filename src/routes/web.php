<?php


Route::namespace('Funsies\Facts\Http\Controllers')->group(function (){
    Route::get('/fact','FactController@index');
    Route::post('/fact','FactController@likes');
});






