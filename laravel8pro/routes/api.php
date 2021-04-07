<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users/{fname?}/{lname?}',function($fname=null,$lname=null){ // to make the name optional ? and $name=null is added
    return 'Hi '.$fname.' '.$lname;
});//->where('name','[a-zA-Z]+'); // name will contain alphabets only

Route::get('/product/{id}',function($id){
    return 'Product Id: '.$id;
});//->where('id','[0-9a-zA-Z]+'); //(local constraints) product id will contain numeric as well as alphabets

Route::match(['get','post'],'/students',function(request $req){
    return 'Requested method is '.$req->method();
});

Route::any('/posts',function(Request $req){
    return 'Requested method is: '.$req->method();
});

