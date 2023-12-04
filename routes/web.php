<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@GetHomePage');
//Login
Route::get('/login','LoginController@LoginPage');
Route::post('/login','LoginController@PostLogin');
Route::get('/logout','LogoutController@GetLogout');

//ProductList
Route::get('/productlist','ProductListController@ProductListPage')->middleware('checkrole');
//CartList
Route::get('/cartlist','BuyProductController@CartListPage');
//Add ToCart
Route::get('/cart/{id}/{quantity}','BuyProductController@AddToCart')->middleware('checklogin');

//Delete CartItem
Route::get('deletecartitem/{id}','BuyProductController@DeleteCartItem');
//Buy Product
Route::get('/createorderinfor','BuyProductController@CreateOrderInforPage');
Route::post('/createorderinfor','BuyProductController@PostCreateOrderInfor');
//Order History
Route::get('/orderhistory','BuyProductController@OrderHistory');
//Order Detail
Route::get('/orderdetail/{id}','BuyProductController@OrderDetail');
//Revenue Check
Route::get('/revenuecheck','BuyProductController@RevenueCheck');
Route::post('/revenuecheck','BuyProductController@RevenueCheck');

//Search Product
Route::post('/','ProductListController@SearchByCategory');

//Add Product
Route::get('/addproduct','ProductListController@AddProductListPage')->middleware('checkrole');
Route::post('/addproduct','ProductListController@PostAddProductListPage')->middleware('checkrole');

//Delete Product
Route::get('deleteproduct/{id}','ProductListController@DeleteProduct')->middleware('checkrole');

//Update Product
Route::get('updateproduct/{id}', 'ProductListController@UpdateProductPage')->middleware('checkrole');
Route::post('/updateproduct','ProductListController@PostUpdateProduct')->middleware('checkrole');

Route::get('/register','registerController@RegisterPage');
Route::post('/register','registerController@PostRegister');



//Staff List
Route::get('/stafflist','StaffListController@index')->middleware('checkrole');

Route::get('/addstaff', 'StaffListController@addStaff')->middleware('checkrole');
Route::post('/addstaff', 'StaffListController@postAddStaff')->middleware('checkrole');

Route::get('/admin-stafflist/update/{staffname}', 'StaffListController@update')->middleware('checkrole');
Route::post('/admin-stafflist/update/{staffname}', 'StaffListController@postUpdate')->middleware('checkrole');

Route::get('/admin-stafflist/delete/{staffname}','StaffListController@delete')->middleware('checkrole');

//User List
Route::get('/userlist','UserListController@index')->middleware('checkrole');
Route::get('/adduser', 'UserListController@addUser')->middleware('checkrole');
Route::post('/adduser', 'UserListController@postAddUser')->middleware('checkrole');

Route::get('/admin-userlist/update/{email}', 'UserListController@updateUser')->middleware('checkrole');
Route::post('/admin-userlist/update/{email}', 'UserListController@postUpdateUser')->middleware('checkrole');
Route::get('/admin-userlist/delete/{email}', 'UserListController@delete');
//Test
Route::get('/test','BuyProductController@RevenueCheck');
