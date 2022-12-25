<?php

Route::get('posts/{id}', 'PostsController@show');
Route::get('posts', 'PostsController@index');