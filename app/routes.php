<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@showWelcome');

Route::get('/homepage', 'HomeController@home');

Route::get('/ordernow', 'OrderNowController@order');

Route::get('/howitworks', 'HowItWorksController@how');

Route::get('/measuringTutorial', 'MeasuringTutorialController@measure');

Route::get('/orderTracking', 'OrderTrackingController@order');

Route::get('/howitworks', 'HowItWorksController@how');

Route::get('/garmentUniform', 'GarmentUniformController@uniform');

Route::get('/menShirtTutorial', 'MenShirtTutorialController@menShirt');

Route::get('/menPantsTutorial', 'MenPantsTutorialController@menPants');

Route::get('/menFullProfileTutorial', 'MenFullProfileTutorialController@menFullProfile');

Route::get('/womenShirtTutorial', 'WomenShirtTutorialController@womenShirt');

Route::get('/womenPantsAndSkirtTutorial', 'WomenPantsAndSkirtTutorialController@womenPantsAndSkirt');

Route::get('/womenFullProfileTutorial', 'WomenFullProfileTutorialController@womenFullProfile');
