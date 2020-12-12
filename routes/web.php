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

Route::get('/col', function () {
    $class="batch";
    $class1="10";
    return view('welcome', compact('class', 'class1'));

});
Route::get('about', function()
{
   $class="batch";
    $class1="10";
   return view('about')->with(['ss'=>$class, 'tt'=>$class1]);
});
Route::get('contact', function()
{
    return view('contact');
});
Route::get('gallary',function(){
     return view('gallary');
});
Route::get('profile',function(){
    return view('profile');
});
Route::get('calc',function(){
    echo 100*10;
});
Route::get('index','User\IndexController@index');

Route::get('contact',function()
{
    return view('contact1');
});
Route::get('welcome',function()
{
    $class="batch";
    $class1="10";
    return view('welcome', compact('class', 'class1'));
});
/*Route::group(['middleware'=>'age'],function(){
    
});*/
// Route::get('/','User\IndexController@index');
Route::group(['middleware'=>'auth'],function(){
     Route::group(['prefix'=>'user'],function(){
     Route::get('about','User\IndexController@about');
    
     Route::get('contact','User\IndexController@contact');
    });

        Route::group(['middleware' => 'admin'],function(){
        Route::group(['prefix'=>'admin'],function(){
   
            Route::get('welcome1', 'user\WelcomeController@index3');
            Route::get('dashboard', 'admin\DashboardController@index2');
            Route::get('category', 'admin\CategoryController@index');
           // Route::get('blog', 'admin\BlogController@index');
            Route::get('category1', 'admin\Category1Controller@index');
            Route::get('create-category', 'admin\Category1Controller@create');
            Route::post('store-category', 'admin\Category1Controller@store');
            Route::get('delete-category/{id}', 'admin\Category1Controller@delete');
            Route::get('update-category/{id}', 'admin\Category1Controller@update_page');
            Route::post('update-category/{id}', 'admin\Category1Controller@update');
        
            //-----------------Category----------------///
        
                 //---------Blog-------//
        
                Route::get('blog', 'admin\Blog1Controller@index');
                Route::get('create-blog', 'admin\Blog1Controller@create');
                Route::post('store-blog', 'admin\Blog1Controller@store');
                Route::get('delete-blog/{id}', 'admin\Blog1Controller@delete');
                Route::get('update-blog/{id}', 'admin\Blog1Controller@update_page');
                Route::post('update-blog/{id}', 'admin\Blog1Controller@update');
                
                //------Blog---------
            
        });
    });
    
});
//------------Category-------------//



Route::get('contact1',function(){
          return view('user.contact');

          
});


//Route::get('/', 'User\IndexController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
