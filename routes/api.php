<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::options('/{all}', function (Request $request) {
    $origin = $request->header('ORIGIN', '*');
    // header("Access-Control-Allow-Origin: $origin");
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Headers: Authorization, Origin, Access-Control-Request-Headers, SERVER_NAME, Access-Control-Allow-Headers, cache-control, token, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie');
})->where(['all' => '(\S|/)+']);

Route::any('/', 'IndexController@index');

//搜索结果
Route::get('/search', 'SearchController@searchBooks');

//复合搜索
Route::get('/book/search', 'SearchController@searchMixedBooks');

//获取热门书籍
Route::get('/hot/books', 'IndexController@hotBooks');

//获取推荐书籍
Route::get('/recommend/books', 'IndexController@recommendBooks');

//聚合首页数据
Route::get('/home/books', 'IndexController@homeBooks');

//获取bannar
Route::get('/bannar/list', 'IndexController@bannarBooks');

//获取所有书籍
Route::get('/book/all', 'IndexController@index');

//获取分类列表
Route::get('/classifys', 'ClassifyController@classifyList');

//分类菜单
Route::get('/classify/menus', 'ClassifyController@classifyMenus');

//获取分类下书籍
Route::get('/classifys/books', 'ClassifyController@classifyBooks');

//用户信息
Route::get('/user/{openid}', 'UserController@userInfo');

//用户书架 -- 重构
Route::get('/user/{user_id}/bookshelf', 'UserController@userBookShelf');
Route::post('/user/{user_id}/bookshelf/{book_id}', 'UserController@addBookForBookShelf');
Route::delete('/user/{user_id}/bookshelf/{book_id}', 'UserController@removeBookForBookShelf');
Route::delete('/user/{user_id}/bookshelf/books/{book_ids}', 'UserController@removeBooksForBookShelf');
Route::put('/user/{user_id}/bookshelf/{book_id}', 'UserController@updateBookForBookShelf');
//获取书架书籍状态 -- 重构
Route::get('/user/{user_id}/bookshelf/state', 'UserController@getBookStateForBookShelf');

//小程序登陆
Route::get('/wechat/login/{code}', 'LoginController@loginByWeChat');
Route::post('/wechat/register', 'LoginController@registerByWeChat');

//账户登陆
Route::post('/user/{account}/token', 'LoginController@register');
Route::get('/user/{account}/token', 'LoginController@login');
//手机验证码登陆
Route::post('/user/{phone}/login', 'LoginController@loginByPhoneNumberValidCode');
//



//新auth验证登陆
Route::post('login', 'Auth\LoginController@login');
Route::get('login', 'Auth\LoginController@login');
Route::post('phone/login', 'Auth\LoginController@loginByPhone');
Route::post('phone/{phone}/sms', 'Auth\LoginController@sendLoginValidCode');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');
//手机号登陆
//小程序登陆
//需要登陆态验证
Route::middleware('auth')->group(function () {
    Route::get('api_token', 'Auth\ApiTokenController@update');
});
//新接口
Route::middleware('auth:api')->group(function() {
    Route::post('password/rest', 'Auth\ResetPasswordController@restPassword');
    //用户书架
    Route::get('/bookshelf', 'BookShelf\BookController@books');
    Route::post('/bookshelf/{book_id}', 'BookShelf\BookController@addBook');
    Route::delete('/bookshelf/books/{book_ids}', 'BookShelf\BookController@deleteBooks');
    Route::put('/bookshelf/{book_id}', 'BookShelf\BookController@updateBook');
    //获取书架书籍状态
    Route::get('/bookshelf/state', 'UserController@getBookStateForBookShelf');
    //获取授权用户信息
    Route::get('/user', 'Auth\ApiTokenController@user');
    //应用配置
    Route::get('/configure', function (){});
});

//获取书籍详情
Route::get('/book/{book_id}', 'BookController@bookDetail');

//获取章节目录
Route::get('/book/{book_id}/chapters', 'BookController@bookChapters');

//获取类似的推荐书籍
Route::get('/book/{book_id}/recommends', 'BookController@recommendAsBooks');

//获取书籍指定索引章节内容
Route::get('/book/{book_id}/chapter/{index}/contents', 'BookController@chapterContentsByIndex');

//获取书籍封面图
Route::get('/book/{book_id}/image', 'BookController@image');

//获取章节内容
Route::get('/chapter/{chapter_id}/contents', 'BookController@chapterContents');