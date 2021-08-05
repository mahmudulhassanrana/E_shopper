<?php
     /****/

	Route::get('/','YouthController@index');
	Route::get('/cart','YouthController@shop1');
	Route::get('/products','YouthController@shop2');
	Route::get('/products-details','YouthController@shop3');
	Route::get('/blog','YouthController@blog1');
	Route::get('/single-blog','YouthController@blog2');
	Route::get('/contact','YouthController@contactus');
	Route::get('/chome','YouthController@chome');
	Route::get('/404','YouthController@error');
	Route::get('/userinfo','YouthController@userinfo');
	Route::get('register/verify/{token}','Auth\RegisterController@verify');

Auth::routes();

Route::get('/hm', 'HomeController@index');

