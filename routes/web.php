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

//Route::get('/', function () {
//    return view('');
//});
//Route::get('danhmuc',function (){
//    return view('danhmuc');
//});
//
//
//
//Route::get('danhmuc','DanhMucController@getDanhMuc')->name('danhmuc');
//
//Route::post('danhmuc','DanhMucController@themDanhMuc')->name('themdanhmuc');
//
//Route::get('suadanhmuc/{id}','DanhMucController@suaDanhMuc')->name('suadanhmuc');
//
//Route::post('suadanhmuc/{id}/','DanhMucController@luuDanhMuc')->name('luudanhmuc');
//
//Route::get('xoadanhuc/{id}','DanhMuccontroller@xoaDanhMuc')->name('xoadanhmuc');
//
//Route::get('sanpham',function (){
//    return view('sanpham');
//})->name('sanpham');
//
//
//Route::get('hoadon',function (){
//    return view('hoadon');
//})->name('hoadon');
//

Route::get('/student','NhanVienController@student');

Route::post('themstudent','NhanVienController@Themstudent');
Route::post('themstudent','NhanVienController@luuStudentt');


