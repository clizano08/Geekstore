<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ClasificationController;
use App\Http\Controllers\DeliverymenController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderHeaderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TypeDeliverieController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\TypeVehicleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Models\Deliverymen;
use App\Models\OrderDetail;
use App\Models\OrderHeader;
use App\Models\TypeVehicle;
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

//http://127.0.0.1:8000/api/v1/geekstore/auth
Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'geekstore'], function () {
        //Rutas auth ok
        Route::group([
            'prefix' => 'auth'
        ], function ($router) {
            Route::post('login', [AuthController::class, 'login']);
            Route::post('register', [AuthController::class, 'register']);
            Route::post('logout', [AuthController::class, 'logout']);
        });
        //independientes
        //Rutas rol ok
        Route::group([
            'prefix' => 'rol'
        ], function ($router) {
            Route::get('', [RolController::class, 'rol']);
        });
        //Rutas clasificaction ok
        Route::group([
            'prefix' => 'clasification'
        ], function ($router) {
            Route::get('', [ClasificationController::class, 'clasification']);
        });
        //Rutas typedeliverie ok
        Route::group([
            'prefix' => 'typedeliverie'
        ], function ($router) {
            Route::get('', [TypeDeliverieController::class, 'typedeliverie']);
        });
        //Rutas typevechicle ok
        Route::group([
            'prefix' => 'typevehicle'
        ], function ($router) {
            Route::get('', [TypeVehicleController::class, 'typevehicle']);
        });
        //Rutas typeproduct ok
        Route::group([
            'prefix' => 'typeproduct'
        ], function ($router) {
            Route::get('', [TypeProductController::class, 'typeproduct']);
        });
        //dependientes
        //Rutas user ok
        Route::group([
            'prefix' => 'user'
        ], function ($router) {
            Route::get('active', [UserController::class, 'userActive']); //->middleware(['auth:api', 'scopes:administrador']);
            Route::get('inactive', [UserController::class, 'userInactive']); //->middleware(['auth:api', 'scopes:administrador']);
            Route::get('/{id}', [UserController::class, 'userByID']); //->middleware(['auth:api', 'scopes:administrador']);
        });


        //Rutas deliveryman ok
        Route::group([
            'prefix' => 'deliverymen'
        ], function ($router) {
            Route::get('active', [DeliverymenController::class, 'deliverymenActive']); //->middleware(['auth:api', 'scopes:administrador']);
            Route::get('inactive', [DeliverymenController::class, 'deliverymenInactive']); //->middleware(['auth:api', 'scopes:administrador']);
            Route::get('/{id}', [DeliverymenController::class, 'deliverymenByID']); //->middleware(['auth:api', 'scopes:administrador']);
        });
        //Rutas product ok
        Route::group([
            'prefix' => 'product'
        ], function ($router) {
            Route::get('active', [ProductController::class, 'productActive']); //->middleware(['auth:api', 'scopes:administrador']);
            Route::get('inactive', [ProductController::class, 'productInactive']); //->middleware(['auth:api', 'scopes:administrador']);
            Route::get('/{id}', [ProductController::class, 'productByID']); //->middleware(['auth:api', 'scopes:administrador']);
        });
        //Rutas order header ok
        Route::group([
            'prefix' => 'orderheader'
        ], function ($router) {
            Route::get('active', [OrderHeaderController::class, 'orderActive'])->middleware(['auth:api', 'scope:administrador,vendedor']);
            Route::get('inactive', [OrderHeaderController::class, 'orderInactive'])->middleware(['auth:api', 'scope:administrador,vendedor']);
            Route::get('/{id}', [OrderHeaderController::class, 'orderByID'])->middleware(['auth:api', 'scope:administrador,vendedor']);
        });
        //Rutas order detail ok
        Route::group([
            'prefix' => 'orderdetail'
        ], function ($router) {
            Route::get('/{id}', [OrderDetailController::class, 'orderdetailByOrderheader'])->middleware(['auth:api', 'scope:administrador,vendedor']);
        });
        //Rutas bill ok
        Route::group([
            'prefix' => 'bill'
        ], function ($router) {
            Route::get('active', [BillController::class, 'billActive']); //->middleware(['auth:api', 'scopes:administrador,vendedor']);
            Route::get('inactive', [BillController::class, 'billInactive']); //->middleware(['auth:api', 'scopes:administrador,vendedor']);
            Route::get('/{id}', [BillController::class, 'billByID']); //->middleware(['auth:api', 'scopes:administrador,vendedor']);
        });
        //Rutas vehicle ok
        Route::group([
            'prefix' => 'vehicle'
        ], function ($router) {
            Route::get('', [VehicleController::class, 'vehicle']); //->middleware(['auth:api', 'scopes:administrador']);
            Route::get('/{id}', [VehicleController::class, 'vehicleByID']); //->middleware(['auth:api', 'scopes:administrador']);
        });
    });
});
