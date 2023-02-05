<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

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

//首页
Route::get('/',[IndexController::class,'index'])
->name('index');

//改变blog发布状态
Route::patch('/blog/{id}',[BlogController::class,'status'])
->name('blog.status');

//blog资源路由
Route::resource('blog', BlogController::class)
->except(['index']);

//个人中心-修改个人信息-页面
Route::get('/user',[UserController::class,'infoPage'])
->name('user.info');

//个人中心修改个人信息-更新数据
Route::put('/user',[UserController::class,'infoUpdate'])
->name('user.info');

//个人中心-头像-页面
Route::get('/avatar',[UserController::class,'avatarPage'])
->name('user.avatar');

//个人中心-头像-页面
Route::put('/avatar',[UserController::class,'avatarUpdate'])
->name('user.avatar.update');

//个人中心-我的博客
Route::put('/user/blog',[UserController::class,'UserBlog'])
->name('user.blog');

//评论路由
Route::post('/blog/{id}/comment',CommentController::class);

//首页
// Route::get('/', function () {
//     dd('home');
// })->name('index');

// //视图路由
// Route::view('/welcome',function(){
//     return view('welcome');
// })->name('welcome');

// //博客详情页
// Route::get('/blog/{id}',function($id){
//     dd('详情 id'.$id);
// })->name('blog.show')->where('id','[0-9]+');

// //博客发布页
// Route::get('/blog/create',function(){
//     dd('添加');
// })->name('blog.create');

// //表单提交页
// Route::post('/blog',function(){
//     dd('提交并保存');
// })->name('blog.store');

// //修改页
// Route::get('/blog/{id}/edit',function(){
//     dd('修改的博客页面');
// })->name('blog.edit');

// //提交修改
// Route::put('/blog/{id}',function($id){
//     dd('执行修改，修改的目标为：'.$id);
// })->name('blog.update');

// //删除页
// Route::delete('/blog/{id}',function($id){
//     dd('删除的博客是:'.$id);
// })->name('blog.destory');

// //文章管理页
// Route::patch('/blog/{id}',function(){
//     dd('要改变状态的博客是');
// })->name('blog.status');

// //个人中心-修改个人信息-页面
// Route::get('/user',function(){
//     dd('change users data');
// })->name('user.info');

// //个人中心-修改个人信息-更新数据
// Route::put('/user',function(){
//     dd('执行修改个人信息');
// })->name('user.update');

// //个人中心-修改个人信息-页面
// Route::get('/user/avatar',function(){
//     dd('change users avaters');
// })->name('user.avatar');

// //个人中心-修改个人信息-更新数据
// Route::patch('/user/avatar',function(){
//     dd('执行修改个人头像');
// })->name('user.avatar.update'); 

// //个人中心-我的博客
// Route::get('/user/blog',function(){
//     dd('我的所有博客');
// })->name('user.blog');

// //登录注册使用laravel提供的路由
