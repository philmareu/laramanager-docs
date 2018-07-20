<?php

Route::view('/', 'home.index');
Route::get('/docs/{page?}', 'DocsController@index');