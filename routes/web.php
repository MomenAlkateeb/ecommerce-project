<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\DashboardController;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

    Route::get('/' , [admincontroller::class , 'index']);

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/redirect' , [admincontroller::class , 'redirect']);

    Route::get('view_catagory' , [DashboardController::class , 'view_catagory']);

    Route::post('add_catagory' , [DashboardController::class , 'add_catagory']);

    Route::get('remove_category/{id}' , [DashboardController::class , 'remove_category']);

    Route::get('view_product' , [DashboardController::class , 'view_product']);

    Route::post('add_product' , [DashboardController::class , 'add_product']);

    Route::get('show_product' , [DashboardController::class , 'show_product']);

    Route::get('delete_product/{id}' , [DashboardController::class , 'delete_product']);

    Route::get('update_product/{id}' , [DashboardController::class , 'update_product']);

    Route::post('confirm_update/{id}' , [DashboardController::class , 'confirm_update']);

    Route::get('product_details/{id}' , [DashboardController::class , 'product_details']);

    Route::post('products_cart/{id}' ,[admincontroller::class , 'product_cart'] );

    Route::get('cart_show' , [admincontroller::class , 'cart_show']);

    Route::get('delete_cart/{id}' , [admincontroller::class , 'delete_cart']);

    Route::get('cash_order' , [admincontroller::class , 'cash_order']);

    Route::get('card_order' , [admincontroller::class , 'card_order']);

// Route::get('cash_orders' , [admincontroller::class , 'cash_orders']);

Route::get('view_order' , [DashboardController::class , 'view_order']);

Route::get('update_01/{id}' , [DashboardController::class , 'update_01']);

Route::get('update_02/{id}' , [DashboardController::class , 'update_02']);

Route::get('update_03/{id}' , [DashboardController::class , 'update_03']);

Route::get('update_04/{id}' , [DashboardController::class , 'update_04']);

Route::get('update_05/{id}' , [DashboardController::class , 'update_05']);

Route::get('search_order' , [DashboardController::class , 'search_order']);

Route::get('Confirm' , [admincontroller::class , 'Confirmation']);

Route::get('confirm_info' , [admincontroller::class , 'confirm_info']);

Route::get('costumer_order' , [admincontroller::class , 'costumer_order']);

Route::get('all_products' , [admincontroller::class , 'all_products']);

Route::get('product_search' , [admincontroller::class , 'search_products']);






