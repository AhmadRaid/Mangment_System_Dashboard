<?php

use App\Models\Attribute;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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


Route::get('/login', 'loginController@login')->name('login');
Route::post('/postlogin', 'loginController@postLogin')->name('login.post');


Route::get('/logout', 'loginController@logout')->name('logout');

Route::get('roles', 'RoleController@index')->name('roles.index');
Route::get('roles/create', 'RoleController@create')->name('roles.create');
Route::post('roles/store', 'RoleController@store')->name('roles.store');
Route::get('roles/edit/{id}', 'RoleController@edit')->name('role.edit');
Route::post('roles/update/{id}', 'RoleController@update')->name('roles.update');
Route::get('roles/{id}', 'RoleController@show')->name('roles.show');
Route::get('roles/delete/{id}', 'RoleController@destroy')->name('roles.delete');


Route::get('users', 'UserController@index')->name('users');
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users/store', 'UserController@store')->name('users.store');
Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::post('users/update/{id}', 'UserController@update')->name('users.update');
Route::get('users/{id}', 'UserController@show')->name('users.show');
Route::get('users/delete/{id}', 'UserController@destroy')->name('users.delete');
Route::get('users/statistics', 'UserController@statistics')->name('users.statistics');
Route::post('users/statistics/post', 'UserController@statistics')->name('users.statistics.post');


Route::get('MainPage', 'HomeController@index')->name('Main_Page');
Route::get('time', 'TimeController@time')->name('Time');

Route::post('changetime', 'TimeController@changetime')->name('changetime');

Route::view('permission', 'Permission.create');
Route::post('permission/store', function (Request $request) {

    Permission::create(['name' => $request->name]);

})->name('permission.store');


Route::group(['prefix' => 'department', 'middleware' => 'Check_Country'], function () {

    Route::get('/', 'DepartmentController@index')->name('department');
    Route::get('create', 'DepartmentController@create')->name('department.create');
    Route::post('store', 'DepartmentController@store')->name('department.store');
    Route::get('edit/{id}', 'DepartmentController@edit')->name('department.edit');
    Route::post('update/{id}', 'DepartmentController@update')->name('department.update');
    Route::get('delete/{id}', 'DepartmentController@destroy')->name('department.delete');
});

//////////////////////////////////////

Route::group(['prefix' => 'SalesSources'], function () {

    Route::get('/', 'SalesSourcesController@index')->name('SalesSources');
    Route::get('create', 'SalesSourcesController@create')->name('SalesSources.create');
    Route::post('store', 'SalesSourcesController@store')->name('SalesSources.store');
    Route::get('edit/{id}', 'SalesSourcesController@edit')->name('SalesSources.edit');
    Route::post('update/{id}', 'SalesSourcesController@update')->name('SalesSources.update');
    Route::get('delete/{id}', 'SalesSourcesController@destroy')->name('SalesSources.delete');
});

//////////////////////////////////////////////


Route::group(['prefix' => 'order'], function () {

    Route::get('/', 'OrderController@index')->name('order');
    Route::get('create', 'OrderController@create');
    Route::post('store', 'OrderController@store')->name('order.store');
    Route::get('show/{id}', 'OrderController@show')->name('order.show');
    Route::get('edit/{id}', 'OrderController@edit')->name('order.edit');
    Route::post('update/{id}', 'OrderController@update')->name('order.update');
    Route::get('delete/{id}', 'OrderController@destroy')->name('order.delete');
    Route::get('export', 'OrderController@export')->name('excel');
    Route::get('specify_department/{department_id}',
        'OrderController@specify_department')
        ->name('select_product_with_custom_department');

    Route::get('specify_product/{product_id}',
        'OrderController@specify_product')
        ->name('get_info_product');

    Route::get('check_Customer/{phone}',
        'OrderController@checkCustomer')
        ->name('check_customer');

    Route::get('displayOrder',
        function () {
            return view('order.displayOrder');
        });

});


///////////////////////////////////////////////////


Route::group(['prefix' => 'OrderStatus'], function () {

    Route::get('/', 'OrderStatusController@index')->name('orderStatus');
    Route::get('create', 'OrderStatusController@create')->name('orderStatus.create');
    Route::post('/store', 'OrderStatusController@store')->name('orderStatus.store');
    Route::get('edit/{id}', 'OrderStatusController@edit')->name('orderStatus.edit');
    Route::post('update/{id}', 'OrderStatusController@update')->name('orderStatus.update');
    Route::get('delete/{id}', 'OrderStatusController@destroy')->name('orderStatus.delete');
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::group(['prefix' => 'product'], function () {

    Route::get('/', 'ProductController@index')->name('product');
    Route::get('create', 'ProductController@create')->name('product.create');
    Route::post('/store', 'ProductController@store')->name('product.store');
    Route::get('edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::post('update/{id}', 'ProductController@update')->name('product.update');
    Route::get('delete/{id}', 'ProductController@destroy')->name('product.delete');
});

////////////////////////////////////////////////////////

Route::group(['prefix' => 'store'], function () {

    Route::get('/', 'StoreController@index')->name('store');
    Route::get('create', 'StoreController@create')->name('store.create');
    Route::post('store', 'StoreController@store')->name('store.store');
    Route::get('edit/{id}', 'StoreController@edit')->name('store.edit');
    Route::post('update/{id}', 'StoreController@update')->name('store.update');
    Route::get('delete/{id}', 'StoreController@destroy')->name('store.delete');
    Route::get('record', 'StoreController@record')->name('store.record');
});


/////////////////////////////////////////////////////////////

Route::group(['prefix' => 'attribute'], function () {

    Route::get('/', 'AttributeController@index')->name('attribute');
    Route::get('create', 'AttributeController@create');
    Route::post('store', 'AttributeController@store')->name('attribute.store');
    Route::get('edit/{id}', 'AttributeController@edit')->name('attribute.edit');
    Route::post('update/{id}', 'AttributeController@update')->name('attribute.update');
    Route::get('delete/{id}', 'AttributeController@destroy')->name('attribute.delete');
});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix' => 'option'], function () {

    Route::get('/', 'OptionController@index')->name('option');
    Route::get('create', 'OptionController@create');
    Route::post('store', 'OptionController@store')->name('option.store');
    Route::get('edit/{id}', 'OptionController@edit')->name('option.edit');
    Route::post('update/{id}', 'OptionController@update')->name('option.update');
    Route::get('delete/{id}', 'OptionController@destroy')->name('option.delete');
});


/////////////////////////////////////////////////////////////////


Route::group(['prefix' => 'country'], function () {

    Route::get('/', 'CountryController@index')->name('country');
    Route::get('create', 'CountryController@create');
    Route::post('store', 'CountryController@store')->name('country.store');
    Route::get('edit/{id}', 'CountryController@edit')->name('country.edit');
    Route::post('update/{id}', 'CountryController@update')->name('country.update');
    Route::get('delete/{id}', 'CountryController@destroy')->name('country.delete');
    Route::get('ChooseCountry', 'CountryController@choosecountry')->name('country.ChooseCountry');
    Route::get('sendCountry/{id}', 'CountryController@sendCountry')->name('country.SendCountry');
});


/////////////////////////////////////////////////////////////


Route::get('chart', function () {
    $order = \App\Models\Order::select(
        DB::raw(now()->year),
        DB::raw('MONTH(created_at) as month'),
        DB::raw('Count(status_id =1) as Solid')
    )->groupBy('month')->get();

    return $order;
})->name('chart');


Route::get('chart', function () {

    return $date = date('h:i:s');

});

