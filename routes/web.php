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
use App\Tracker;

Route::get('/', function () {
    Tracker::firstOrCreate([
        'ip'   => $_SERVER['REMOTE_ADDR']],
        ['ip'   => $_SERVER['REMOTE_ADDR'],
        'current_date' => date('Y-m-d')])->save();

    return view('register');
})->name('welcome');


Route::post('alif/register','RegistrationController@create')->name('post.register');
Route::get('alif/search-id-no','RegistrationController@search')->name('post.search');
Route::post('alif/update','RegistrationController@update')->name('post.update');

Route::get('alif/location/cities/{id}','RegistrationController@city')->name('get.city');
Route::get('alif/location/barangay/{id}','RegistrationController@barangay')->name('get.barangay');





Route::group(['middleware' => ['role:admin']], function () {
	Route::resource('permissions', 'Admin\PermissionsController');
    Route::resource('roles', 'Admin\RolesController');
    Route::resource('users', 'Admin\UsersController');

    Route::get('login-activities',[
        'as' => 'login-activities',
        'uses' => 'Admin\UsersController@indexLoginLogs'
    ]);    
});

Route::group(['middleware' => ['role:user']], function () {
    
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('profile','Users\ProfileController');
});

Auth::routes();

Route::group(['middleware' => ['role:user|admin']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});


Route::group(['middleware' => ['role:admin'], 'prefix'=>'tourismo.admin/manage-plan-and-package'], function () {

    Route::get('/plan.list', 'Admin\ManagePlan_and_PackageController@plan_list')->name('plan.list');

});


Route::group(['middleware' => ['role:admin'], 'prefix'=>'alif-admin/manage-registered'], function () {

    Route::get('/index', 'Admin\ManageRegisteredController@index')->name('manage-registered.index');
    Route::get('/export', 'Admin\ManageRegisteredController@export')->name('manage-registered.export');


});
