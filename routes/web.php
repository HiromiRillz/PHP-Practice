<?php

Route::get('/', function () {
    return view('practice');
});

Auth::routes();

Route::get('/top', 'TopController@topView')->name('top');

?>