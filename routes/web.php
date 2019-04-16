<?php

Route::get('/', 'IndexController@index');

# resources
Route::resource('/equipamentos', 'EquipamentoController');
Route::resource('/redes', 'RedeController');
Route::resource('/roles', 'RoleController');
Route::resource('/users', 'UserController');

# rotas para a senha única
Route::get('/login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/logout', 'Auth\LoginController@logout');

# config
Route::get('/config', 'ConfigController@index');
Route::post('/config', 'ConfigController@config');
Route::post('/freeradius/sincronize', 'FreeradiusController@sincronize');

# APIs
Route::post('/dhcpd.conf', 'DhcpController@dhcpd');
Route::post('/dhcpd.hosts.conf', 'DhcpController@dhcpd_hosts');
Route::post('/freeradius/authorize-file', 'FreeradiusController@file');

# AJAX
Route::post('/nusp', 'NUSPController@findNUSP');
