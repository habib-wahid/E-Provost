<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['web']], function() {


    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    
    Route::post('/signup',[
         'uses' =>'UserController@postSignUp',
         'as' => 'signup'
    
    ]);

    Route::post('/signin',[
        'uses' =>'UserController@postSignIn',
        'as' => 'signin'
   
   ]);

   Route::get('/logout',[

    'uses'=>'UserController@getLogout',
    'as'=> 'logout'
   ]);
   
    Route::get('/dashboard',[

        'uses' => 'PostController@getDashboard',
        'as' => 'dashboard'
    ])->middleware('auth');

    Route::post('/createpost', [

        'uses' => 'PostController@postCreatePost',
        'as' => 'post.create'
    
    ]);

    Route::post('/createnotice', [

        'uses' => 'PostController@postCreateNotice',
        'as' => 'post.notice'
    
    ]);

    Route::get('/account',[

        'uses' => 'PostController@getAccount',
        'as' => 'account'
    ])->middleware('auth');

   Route::get('/delet-post/{post_id}', [

    'uses' => 'PostController@getDeletPost',
    'as' =>'post.delet'
   ])->middleware('auth');

   Route::get('/notice',[

    'uses' => 'PostController@showNotice',
    'as' => 'notice'
])->middleware('auth');

Route::get('/information',[

    'uses' => 'UserController@showInformation',
    'as' => 'information'
])->middleware('auth');
    
});

