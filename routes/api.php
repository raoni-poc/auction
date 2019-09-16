<?php

use Illuminate\Http\Request;

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

Route::group(['namespace' => 'Api', 'as' => 'api.'], function () {
    Route::resource('account-status', 'AccountStatusController', );
    Route::resource('address', 'AddressController', );
    Route::resource('auth', 'AuthController', );
    Route::resource('bid', 'BidController', );
    Route::resource('cargo', 'CargoController', );
    Route::resource('city', 'CityController', );
    Route::resource('company', 'CompanyController', );
    Route::resource('country', 'CountryController', );
    Route::resource('document', 'DocumentController', );
    Route::resource('document-type', 'DocumentTypeController', );
    Route::resource('offer', 'OfferController', );
    Route::resource('offer-type', 'OfferTypeController', );
    Route::resource('permission', 'PermissionController', );
    Route::resource('requirement', 'RequirementController', );
    Route::resource('requirement-type', 'RequirementTypeController', );
    Route::resource('role', 'RoleController', );
    Route::resource('route', 'RouteController', );
    Route::resource('state', 'StateController', );
    Route::resource('users', 'UserController', ['except' => ['create', 'edit']]);
});
