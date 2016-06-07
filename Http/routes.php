<?php

Route::group(['middleware' => 'web', 'prefix' => 'izwidget', 'namespace' => 'Modules\IzWidget\Http\Controllers'], function()
{
	Route::get('/', 'IzWidgetController@index');
});