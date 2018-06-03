<?php
Route::get('/','IndexController@index');
Route::get('/main','IndexController@main');
Route::any('/admin/add','AdminController@add');
Route::post('/admin/addOperate','AdminController@addOperate');
Route::any('/admin/index','AdminController@index');
Route::get('/admin/tables','AdminController@getTables');
Route::get('/admin/edit/{id}','AdminController@edit')->where('id', '[0-9]+');
Route::post('/admin/editOperate','AdminController@editOperate');
Route::post('/admin/delete','AdminController@delete');
Route::post('/admin/frozen','AdminController@frozen');
//角色
Route::any('/role/add','RoleController@add');
Route::post('/role/addOperate','RoleController@addOperate');
Route::get('/role/index','RoleController@index');
Route::get('/role/edit/{id}','RoleController@edit')->where('id', '[0-9]+');
Route::post('/role/editOperate','RoleController@editOperate');
Route::post('/role/delete','RoleController@delete');
//管理员——角色
Route::get('/role/addUser/{id}','RoleController@addUser')->where('id', '[0-9]+')->name('add-admin');
Route::post('/role/addUserOperate','RoleController@addUserOperate');
//权限
Route::get('/privilege/index/{role_id}','PrivilegeController@index')->where('role_id', '[0-9]+')->name('pri-index');
Route::get('/privilege/refresh','PrivilegeController@refresh')->name('pri-refresh');
Route::post('/privilege/updateRolePri','PrivilegeController@updateRolePri')->name('update_pri_role');

//代理商
Route::get('/agent/index','AgentController@index');
Route::post('/agent/editOperate','AgentController@editOperate');
Route::post('/agent/delete','AgentController@delete');

//位置
Route::get('/position/index','PositionController@index');