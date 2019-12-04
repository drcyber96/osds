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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', 'PagesController@getWelcome');
Route::get('/custom_search', 'PagesController@getCustomsearch');
Route::resource('customsearch', 'CustomSearchController');
Route::get('/info', 'PagesController@getInfo');
Route::get('/feedback', 'PagesController@getFeedback');



Route::get('/scammers', 'ScammersController@getScammers')->middleware('auth:admin');
Route::post('/scammer/submit', 'ScammersController@submit')->middleware('auth:admin');
Route::get('/about', 'PagesController@getAbout');

Route::get('/reportscam','reportscamController@index')->middleware('auth');
Route::post('/addreport','reportscamController@store')->name('addreport')->middleware('auth');

Route::get('/manage_report', 'reportscamController@Display')->middleware('auth:admin');
Route::resource('reportscam','reportscamController');

Route::get('/manage_scammer', 'ScammersController@display')->middleware('auth:admin');
Route::resource('Scammers','ScammersController')->middleware('auth:admin');



//info blog

Route::get('/Menyamar-Sebagai-Kenalan', 'PagesController@getSindiket1');
Route::get('/sindiket-kad-atm', 'PagesController@getSindiket2');
Route::get('/Phone-Scam', 'PagesController@getSindiket3');
Route::get('/Sindiket-Minta-Nombor-TAC-Bank', 'PagesController@getSindiket4');
Route::get('/Sindiket-Pinjaman-Tidak-Wujud', 'PagesController@getSindiket5');
Route::get('/Tipu-SMS', 'PagesController@getSindiket6');
Route::get('/Love-Scam', 'PagesController@getSindiket7');
Route::get('/Wang-Palsu', 'PagesController@getSindiket8');
Route::get('/Keldai-Akaun', 'PagesController@getSindiket9');




Route::post('/post/destroy', 'AdminPostController@destroy')->name('posts.destroy');
Route::delete('post/destroy', 'AdminPostController@destroy')->middleware('auth:admin');
Route::get('/post/destroy/{id}', 'AdminPostController@destroy')->middleware('auth:admin');



//user feedback
Route::get('/post/create', 'PostController@create')->name('posts.create')->middleware('auth');
Route::post('/post/store', 'PostController@store')->name('posts.store')->middleware('auth');

Route::get('/posts', 'PostController@index');
Route::get('/posts/index', 'PostController@index')->name('posts.index')->middleware('auth');

Route::get('/post/show/{id}', 'PostController@show')->name('posts.show');

Route::post('/comment/store', 'CommentController@store')->name('comment.add')->middleware('auth');
Route::post('/comments/store', 'CommentController@store')->name('comments.store')->middleware('auth');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add')->middleware('auth');

//admin feedback

Route::get('/posts/admin-index', 'AdminPostController@index')->name('posts.admin-index')->middleware('auth:admin');
Route::get('/post/admin-show/{id}', 'AdminPostController@show')->name('posts.admin-show')->middleware('auth:admin');

Route::post('/comment/store', 'AdminCommentController@store')->name('comment.add')->middleware('auth');
Route::post('/comments/admin-store', 'AdminCommentController@store')->name('comments.admin-store')->middleware('auth');
Route::post('/reply/store', 'AdminCommentController@replyStore')->name('reply.add')->middleware('auth');

Route::get('/post/admin-create', 'AdminPostController@create')->name('posts.admin-create')->middleware('auth:admin');
Route::post('/post/admin-store', 'AdminPostController@store')->name('posts.admin-store')->middleware('auth:admin');




Route::get('/edit/user/', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::post('/edit/user/', 'UserController@update')->name('user.update')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group (function() {
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');



});
