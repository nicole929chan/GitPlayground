<?php

Route::get('posts/{id}', 'PostsController@show');
Route::get('posts', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');