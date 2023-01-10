<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controller\PlaceOrderController;

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




Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'HomeController@redirect')->name('redirect');
Route::get('/admin-dashboard', 'AdminDashboardController@admin')->name('admin');

// PLan subscription Route For the Admin
Route::get('/plan', 'PlanController@show')->name('show');
Route::post('/store-plan', 'PlanController@store')->name('store');





// Route::get('dash-board', 'DashboardController@dash')->name('dash');

Route::get('/profile', 'MyProfileController@profile')->name('profile');

// PRIVACY AND POLICY ROUTE
Route::get('/privacy-policy', 'PrivacyPolicyController@privacy')->name('privacy');

// SUPPORT PAGE ROUTE
Route::get('/support-page', 'SupportPageController@support')->name('support');

Route::get('/{ref}/payment-page', 'PaymentPageController@payment')->name('payment');
Route::get('/completed', 'CompletedTransactionController@completed')->name('completed');



Route::get('/transaction', 'TransactionController@transaction')->name('transaction');
Route::post('/create-transaction', 'TransactionController@create')->name('transaction.create');

// VIEW ORDER ROUTE BEGIN
Route::get('/seller', 'SellerControler@seller')->name('seller');
Route::get('/accept','AcceptOrderController@accept')->name('accept');
Route::get('/decline','DeclineController@decline')->name('decline');
Route::get('/congrats','CongratsSellerController@congrats')->name('congrats');
Route::get('/decline','DeclineSellerController@decline')->name('decline');
Route::get('/buyer', 'buyerController@buyer')->name('buyer');
Route::get('/view', 'buyerController@view')->name('view');
Route::get('/item_delivered', 'ItemDeliveredController@itemd')->name('itemd');
Route::get('/refund_view', 'ItemDeliveredController@refview')->name('refview');

// VIEW ORDER ROUTE END


Route::get('/withdrawal', 'withdrawalController@withdrawal')->name('withdrawal');
Route::get('/not-recieved', 'NotRecievedController@not')->name('not');
Route::get('/in-progress', 'InProgressController@progress')->name('progress');


Route::get('/deposit', 'depositController@deposit')->name('deposit');
Route::post('/confirm-deposit', 'DepositController@confirmDeposit')->name('deposit.confirm');

Route::get('/thanks', 'ThanksController@thanks')->name('thanks');

Route::get('/recieved', 'RecievedController@recieved')->name('recieved');



Route::get('/pay-seller', 'PaySellerController@pay')->name('seller.pay');
Route::get('/seller-paid', 'PaySellerController@paid')->name('paid');


//BUYER REQUESTING A REFUND ROUTE
Route::get('/refund', 'RefundController@refund')->name('refund.view');
Route::post('/refund-id', 'RefundController@page')->name('refund.page');
Route::get('/refund-history', 'RefundController@history')->name('refund.history');
Route::post('/refund_congrats', 'RefundController@refcong')->name('refcong');


//VENDOR REGISTRATION ROUTE
Route::get('/vendor-register', 'VendorRegister@vendor')->name('vendor');




// USERS ROUTE
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard');
    // plan route for the user
    Route::get('/confirm-sub/{id}', 'YearlySubController@fetch')->name('sub');
    Route::post('/subscription/{plan}', 'YearlySubController@subscribe')->name('user.subscribe');
    Route::get('/subscription', 'YearlySubController@yerlysubCallback')->name('subscription.callback');




});
Route::get('/place-order', 'PlaceOrderController@place')->name('place');
Route::post('/accept_order', 'PlaceOrderController@order')->name('order');
Route::get('/order_details/{place}', 'PlaceOrderController@orderDetails')->name('order.details');

// Laravel 5.1.17 and above
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
// Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


// PAYSTACK PAYMENT ROUTE
Route::get('/form', 'PaymentController@show')->name('form');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);