<?php

//user
Route::get('/', array('as'=>'', 'uses'=>'UserController@login'));
Route::get('/new', array('as'=>'new', 'uses'=>'UserController@new'));
Route::post('/login', array('as' => 'login', 'uses'=>'UserController@loginForm'));
Route::get('/info', array('as'=>'info', 'uses'=>'UserController@info'));
Route::post('/save', array('as'=>'save', 'uses'=>'UserController@save'));
Route::get('/logout', array('as'=>'logout', 'uses'=>'UserController@logout'));
Route::get('/delete/{id}', array('as'=>'delete', 'uses'=>'UserController@delete'));
//tasks
Route::get('/todo', array('as'=>'todo', 'uses'=>'UserController@todo'));
Route::post('/todo', array('as'=>'todo', 'uses'=>'UserController@taskEnter'));
Route::get('/deleteTask/{id}', array('as'=>'deleteTask','uses'=>'UserController@deleteTask'));
//edit  logged user
Route::get('/edit', array('as'=>'edit', 'uses'=>'UserController@edit'));
Route::post('/update', array('as'=>'update', 'uses'=>'UserController@update'));


// Route::get('test', function()
//{
//     $user=User::all();
//     $user=User::with('role')->where('role_id', '=', 2)->get();
//     //$user = User::where('role_id', '=', 2)->get();
//     return $user;
// });

//Route::resource('session', 'SessionController');
//Route::get('login', 'SessionController@create');

 


