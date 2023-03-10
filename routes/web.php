<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controller\PlaceOrderController;
use App\Refund;

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

Route::get('/', function () {
    return view('welcome');
});

// ADD 'verify' => true INSIDE AUTH::ROTES([]) BELOW
Auth::routes([]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@redirect')->name('redirect');




// ADMIN ROUTE STARTS HERE
Route::middleware(['auth'])->prefix('admin')->group(function (){

    // ADMIN ROUTE STARTS HERE

Route::get('/admin-dashboard', 'AdminDashboardController@admin')->name('admin');

 // ADMIN->USERS NAV-BAR
//  ALL USERS
Route::get('/all_users', 'AllusersController@allUsers')->name('all.users');
// TO DELETE A USER FROM THE USER TABLE
Route::get('/delete_users/{id}', 'AllusersController@deleteUsers')->name('delete.users');

// ALL DEPOSITS
Route::get('/all_deposits', 'AlldepositsController@allDeposits')->name('all.deposits');
// TO VIEW ALL THE DEPOSITS ON THE ADMIN DASHBOARD
Route::get('/paid_deposits/{id}', 'AlldepositsController@paidDeposits')->name('paid.deposits');

// ALL WITHDRAWALS
Route::get('/all_withdrawals', 'AllwithdrawalsController@allWithdrawals')->name('all.withdrawals');
// TO VIEW ALL THE WITHDRAWALS ON THE ADMIN DASHBOARD
Route::get('/paid_withdrawals/{id}', 'AllwithdrawalsController@paidWithdrawals')->name('paid.withdrawals');

// ALL REFUNDS
Route::get('/all_refunds', 'AllrefundsController@allRefunds')->name('all.refunds');
// TO VIEW ALL THE REFUNDS ON THE ADMIN DASHBOARD
Route::get('/paid_refunds/{id}', 'AllrefundsController@paidRefunds')->name('paid.refunds');

// ALL PAID ORDERS
Route::get('/all_paidorders', 'AllPaidOrdersController@allPaidorders')->name('all.paidorders');
// TO VIEW ALL PAID ORDERS ON THE ADMIN DASHBOARD
Route::get('/paid_orders/{id}', 'AllPaidOrdersController@paidOrders')->name('paid.orders');

// ALL PLACED ORDERS
Route::get('/all_placedorders', 'AllPlacedOrdersController@allPLacedorders')->name('all.placeorders');
// TO VIEW ALL PAID ORDERS ON THE ADMIN DASHBOARD
Route::get('/show_placedorders/{id}', 'AllPlacedOrdersController@placedOrders')->name('show.placeorders');

// ALL CHARGES
Route::get('/all_charges', 'ChargesController@allCharges')->name('all.charges');


Route::get('/all_reports', 'AllreportsController@allReports')->name('all.reports');




// ADMIN ROUTE ENDS HERE

});





// USERS ROUTE ADD 'verified' INSIDE (['auth',])
Route::middleware(['auth' ])->prefix('user')->group(function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard');

// ROUTE FOR PLACE ORDER BEGINS
Route::get('/place-order', 'PlaceOrderController@place')->name('place');
Route::post('/accept_order', 'PlaceOrderController@order')->name('order');
Route::get('/order_details/{place}', 'PlaceOrderController@orderDetails')->name('order.details');

// ROUTE FOR CANCEL  ORDER BEGINS
Route::get('/cancel-order/{place_order}', 'PlaceOrderController@cancelOrder')->name('cancel.order');
// ROUTE FOR CANCEL  ORDER ENDS

// ROUTE FOR PLACE ORDER BEGINS

// Laravel 5.1.17 and above
// Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
// Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


// PAYSTACK PAYMENT ROUTE
Route::get('/form', 'PaymentController@show')->name('form');
Route::post('/pay/{place}', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback'])->name('payment.callback');
Route::get('/success', 'PaymentController@success')->name('success');
//PAY FROM WALLET
Route::get('/pay_from_wallet/{place}','PaymentController@walletPay')->name('wallet.pay');
// RECIEVED PAYMENT ROUTE
Route::post('/recieved/{transaction_id}', 'PaymentController@recievedOrder')->name('recieved.order');

//RECIEVED PAYMENT ROUTE END
// DEPOSIT PAYMENT ROUTE
Route::get('/deposit', 'DepositController@deposit')->name('deposit');
Route::post('/depositDetails', 'DepositController@depositDetails')->name('deposit.details');
Route::get('/depsot/callback', 'DepositController@depositCallback')->name('deposit.callback');


// PLan subscription Route For the Admin
Route::get('/plan', 'PlanController@show')->name('show');
Route::post('/store-plan', 'PlanController@store')->name('store');





// Route::get('dash-board', 'DashboardController@dash')->name('dash');

Route::get('/profile', 'MyProfileController@profile')->name('profile');
Route::post('/post_profile', 'MyProfileController@postProfile')->name('post.profile');


// PRIVACY AND POLICY ROUTE
Route::get('/privacy-policy', 'PrivacyPolicyController@privacy')->name('privacy');

// TERMS & CONDITION
Route::get('/terms-condition', 'TermsConditionController@terms')->name('terms');

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
Route::get('/buyer', 'BuyerController@buyer')->name('buyer');

// VIEW ORDER ROUTE FOR THE BUYER
Route::get('/view', 'BuyerController@view')->name('view');
// FOR SELLER BEGINS
Route::get('/view_seller_order', 'BuyerController@viewSeller')->name('view.seller');
Route::post('/vso_details', 'BuyerController@vsoDetails')->name('vso.details');
// FOR SELLER ENDS

// FOR BUYER BEGINS
Route::get('/view_buyer_order', 'buyerController@viewBuyer')->name('view.buyer');
Route::post('/vbo_details', 'buyerController@vboDetails')->name('vbo.details');
// FOR BUYER ENDS

Route::post('/buyers_order', 'BuyerController@buyersOrder')->name('buyers.order');

// VIEW ORDER ROUTE FOR THE BUYER END

Route::get('/item_delivered', 'ItemDeliveredController@itemd')->name('itemd');
Route::get('/refund_view', 'ItemDeliveredController@refview')->name('refview');

// VIEW ORDER ROUTE END

// WITHDRAWAL ROUTE BEGINS
Route::get('/withdrawal', 'withdrawalController@withdrawal')->name('withdrawal');
Route::post('/withdrawal_details', 'withdrawalController@withdrawalDetails')->name('withdrawal.details');
// WITHDRAWAL ROUTE ENDS HERE

Route::get('/not-recieved', 'NotRecievedController@not')->name('not');
Route::get('/in-progress', 'InProgressController@progress')->name('progress');




Route::get('/thanks', 'ThanksController@thanks')->name('thanks');
Route::get('/insufficient_funds', 'ThanksController@insufficientFunds')->name('insufficient');
Route::get('/insuf_payfunds', 'ThanksController@insufPayfunds')->name('insufpay.funds');

// Route::get('/recieved', 'RecievedController@recieved')->name('recieved');


// RECIEVED BUTTON PART
Route::get('/pay-seller', 'PaySellerController@pay')->name('seller.pay');
// Route::post('/recieved_order', 'RecievedController@recievedOrder')->name('recieved.order');
// Route::post('/recieved_details', 'RecievedController@recievedDetails')->name('recieved.details');



Route::get('/seller-paid', 'PaySellerController@paid')->name('paid');


//BUYER REQUESTING A REFUND ROUTE
Route::get('/refund', 'RefundController@refund')->name('refund.view');
Route:: post('/refund_order', 'RefundController@reforder')->name('reforder');
Route:: get('/refund_id/{refund}', 'RefundController@refDetails')->name('ref.details');

// BUYER REFUND HISTORY DETAILS
Route::get('/refund_history', 'RefundController@refhis')->name('refhis');
Route:: post('/refund_view', 'RefundController@refview')->name('refview');



// Route::post('/refund', 'RefundController@page')->name('refund.page');
Route::get('/refund-history', 'RefundController@history')->name('refund.history');
Route::post('/refund_congrats', 'RefundController@refcong')->name('refcong');

// SELLER SUBMITING A REPORT
Route::get('/report', 'ReportController@report')->name('report');
Route::post('/report_congrats', 'ReportController@reptcong')->name('reptcong');

//VENDOR REGISTRATION ROUTE
Route::get('/vendor-register', 'VendorRegister@vendor')->name('vendor');




// SENDING EMAIL TO THE SELLER AFTER ITEM IS RECIEVED BY A BUYER
// Route::post('/mail/{price}','MailController@purchaseDetails')->name('purchase.details');

});
