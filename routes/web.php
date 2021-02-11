<?php

use Illuminate\Support\Facades\Route;

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
/**
 * 
 * Authentication routes
 * Author: Pamal Ranasinghe
 * 
 * 
 */
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@getAllCateringPackagesUser')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

/**
 * Navigation routes
 * author : pamal ranasinghe
 * 
 * 
 */
Route::get('/takeaway', function () {
    return view('admin.takeaway');
})->middleware('role:superadministrator');

Route::get('/vieworder', function () {
    return view('admin.vieworder');
})->middleware('role:superadministrator');


/**
 * 
 * To insert dummy values to items table : /insert-item
 * view that items : /show-item
 * 
 */
Route::get('/insert-item','ItemController@insertItems');

/**
 * To change customer details 
 * To confirm or delete particular order
 */
Route::get('/getItem/{id}','ItemController@getOne');//Get one item
Route::get('/getItem/delivery/{id}','ItemController@getOneDelivery');//Get one item
Route::get('/confirmOrder','CustomerController@setOrder');//Order confirmation of the customer
Route::get('/update-order/{id}','CustomerController@updateOrder');//Customer allows to update take away order
Route::get('/delete-order/{id}','OrderController@destroy');//Customer allows to delete take away order
Route::get('/continue','CustomerController@message');
Route::get('/set-delivery','CustomerController@setDeliveryOrder');


Route::get('/get-all-orders','OrderController@getAllForReport')->middleware('role:superadministrator');
Route::get('/download-report','OrderController@downloadPDF')->middleware('role:superadministrator');
Route::get('/view-all-orders','OrderController@getAllOrders')->middleware('role:superadministrator');
Route::get('/view/{id}','OrderController@getOneOrder')->middleware('role:superadministrator');
Route::get('/completed/{id}','OrderController@markAsCompleted')->middleware('role:superadministrator');
Route::get('/completed-orders','OrderController@getCompletedOrders')->middleware('role:superadministrator');
Route::get('/all-users','UserController@getAllUsers')->middleware('role:superadministrator');
Route::get('/set-notification','NotificationController@setNotification')->middleware('role:superadministrator');
Route::get('/send-mail/{id}','OrderController@sendCusMail')->middleware('role:superadministrator');
Route::get('/search-takeaway','OrderController@searchTakeAway')->middleware('role:superadministrator');
Route::get('/email-form-reg-cus/{id}','UserController@getCusForEmail')->middleware('role:superadministrator');
Route::get('/send-email-user/{id}','UserController@sendRegCusMail')->middleware('role:superadministrator');
Route::get('/admin-get-all-notes','NotificationController@getAllNotificationsForAdmin')->middleware('role:superadministrator');
Route::get('/admin-delete-notification/{id}','NotificationController@destroyNotification')->middleware('role:superadministrator');
Route::get('/search-reg-cus','UserController@searchRegCustomer')->middleware('role:superadministrator');

/**
 * 
 * author : Kawsikan
 */

Route::get('/add-package', 'Catering_packageController@cateringPackageInsert');
// Show all packages to customer
Route::get('/show-packages', 'Catering_packageController@showAllPackages');
// Show create new packages to Admin 
Route::get('/create-package', 'Catering_packageController@create');
// Show all packages to Admin
Route::get('/showadmin', 'Catering_packageController@adminShowAllPackage')->middleware('role:superadministrator');
// Let  Admin to edit package details
Route::get('/edit-caterpackage/{id}', 'Catering_packageController@edit')->middleware('role:superadministrator');
Route::get('/update-caterpackage/{id}', 'Catering_packageController@update')->middleware('role:superadministrator');
// Admin delete catering packages
Route::get('/delete-caterpackage/{id}', 'Catering_packageController@destroy')->middleware('role:superadministrator');


Route::get('/getPackage/{id}', 'Catering_packageController@getOnePackage');
Route::get('/set-catering-order', 'CustomerController@setCateringOrder');
// Admin page to view catering order detail
Route::get('/show_corders', 'Catering_orderController@adminShowAllCOrders')->middleware('role:superadministrator');
// Admin page to individual orders with unique customer ID
Route::get('/view_corders/{id}', 'Catering_orderController@adminViewAllCOrders')->middleware('role:superadministrator');
// Admin delete catering orders
Route::get('/delete-corder/{id}', 'CustomerController@destroyCOrder')->middleware('role:superadministrator');


// PDF catering package report
Route::get('/cpackage-report','Catering_packageController@getAllPDFReport')->middleware('role:superadministrator');
// Download package report
Route::get('/download-cpackage','Catering_packageController@downloadAllPDF')->middleware('role:superadministrator');

// PDF catering Order report
Route::get('/corder-report','CustomerController@getAllPDFReport')->middleware('role:superadministrator');
// Download Order report
Route::get('/download-corder','CustomerController@downloadAllPDF')->middleware('role:superadministrator');

// cater package  search
Route::get('/search-cpackage','Catering_packageController@search');
Route::get('/search-corder','CustomerController@searchcorder');


/**
 * author : wathma
 * 
 */
Route::get('/createEmployee', function () {
    return view('admin.createEmployee');
})->middleware('role:superadministrator');
Route::get('/show-staff', 'EmployeeController@showEmployees');
Route::get('/inquiry-for-employee/{id}', 'EmployeeController@getOneInquiryEmployee');
Route::get('/confirm-inquiry', 'CustomerController@makeInquiry');

Route::post('/storeEmployee', 'EmployeeController@store')->middleware('role:superadministrator');
Route::get('/get-all-employees', 'EmployeeController@getEmployees')->middleware('role:superadministrator');
Route::get('/editEmployee/{id}', 'EmployeeController@getOneEmployee')->middleware('role:superadministrator');
Route::post('/update-employee/{id}','EmployeeController@updateEmployee')->middleware('role:superadministrator');
Route::get('/delete-one-employee/{id}','EmployeeController@deleteEmployee')->middleware('role:superadministrator');
Route::get('/pdf/download', 'EmployeeController@createPDF')->middleware('role:superadministrator');

/**
 * Author:Nisal
 * 
 */
Route::get('/add-item',function () {
    return view('admin.addItem');
})->middleware('role:superadministrator');
Route::post('/insert-item','ItemController@insertItems')->middleware('role:superadministrator');
Route::get('/show-food-and-bev-items','ItemController@getAllItems')->middleware('role:superadministrator');
Route::get('/delete-one-item/{id}','ItemController@deleteItem')->middleware('role:superadministrator');
Route::get('/set-for-update/{id}','ItemController@getOneForUpdate')->middleware('role:superadministrator');
Route::post('/update-item/{id}','ItemController@updateItems')->middleware('role:superadministrator');
Route::get('/item-pdf','ItemController@downloadItemPDF')->middleware('role:superadministrator');
Route::get('/all-inquiries','CustomerController@getaAllInquiries')->middleware('role:superadministrator');
Route::get('/show-item','ItemController@show');
Route::get('/search-items','ItemController@searchItem');






//AKASH LUMINI

//Packages
Route::get('/packages','PackageController@index');
Route::post('/packages/{id}','PackageController@store');
Route::get('/package/takeaway','PackageController@takeaway');
Route::get('/package/add','PackageController@packageadd');
Route::post('/package/add','PackageController@packagestore');
Route::get('/package/remove','PackageController@packageremove');
Route::get('/package/report','PackageController@downloadPDF');
Route::delete('/package/remove','PackageController@packagedestroy');



//Delivery
Route::get('/delivery','DeliveryController@index');
Route::get('/delivery/{id}/{total}/{quan}','DeliveryController@store');
Route::get('delivery/closed','DeliveryController@show');
Route::get('/admin/delivery','DeliveryController@delivery');
Route::post('/admin/delivery/complete','DeliveryController@complete');
Route::get('/admin/deliver/detail','DeliveryController@detail');
Route::get('/delivery/report','DeliveryController@downloadPDF');
Route::get('/delivery/complete_report','DeliveryController@completedownloadPDF');


//Test
Route::get('/user-catering', 'UserController@getAllCateringPackagesUser');
Route::get('/user-food', 'UserController@getAllFoodandBevUser');
Route::get('/user-packages', 'UserController@getAllPakagesUser');
Route::get('/get-notification','NotificationController@getAllNotificatiion');

/**
 * Author:Hiruni
 * 
 */
/*Route::get('/report-dash', function () {
    return view('reportIndex');
});

Route::get('/orderPaystore','OrderController@storeOrderPayment'); //store normal order details
Route::get('/orderPayget','OrderController@getorderpay');         //get normal order details

//orders.blade.php - Cash On orders
Route::get('/viewnormalorderpay','OrderController@showNormalOderPayDetails');
Route::get('/deleteorderpay/{id}','OrderController@deleteOderPayment');
Route::get('/calTotInco','OrderController@calcTotIncome');
Route::get('/viewReport','NormalReportController@showReport');

//normalreports.blade.php - Order Report
Route::get('/deleterordereport/{id}','NormalReportController@deleteOrderReport'); //delete  one row of the Order Report
Route::get('/show-update/{id}','NormalReportController@showUpdate');                //update one row of the Order Report
Route::get('/income-of-reports','NormalReportController@totalIncomeOFReports');
Route::get('/download-report','NormalReportController@downloadPDF');
Route::get('/get-report','NormalReportController@getAllReports');


//updateNormalOrderReport.blade.php
Route::get('/update-normal-reports/{id}','NormalReportController@updateReport'); //validation






Route::get('/CaterorderPaystore','Catering_orderController@storeCateringOrderPay');  //store catering order details
Route::get('/CaterorderPayget','Catering_orderController@getCateringOrderPay');      //get catering order details

//cateringorders.blade.php - Cash On Catering Orders
Route::get('/viewnormalorderpay','Catering_orderController@showCateringOderPayDetails');
Route::get('/deleteorderpay/{id}','Catering_orderController@deleteCateringOderPayment');
Route::get('/calTotIncoCatering','Catering_orderController@calcTotIncomeCatering');
Route::get('/viewCateringReport','CateringReportController@showCateringReport');

//cateringreports.blade.php - Catering Order Report
Route::get('/deletercateringordereport/{id}','CateringReportController@deleteCateringOrderReport'); //delete  one row of the Catering Order Report
Route::get('/show-catering-update/{id}','CateringReportController@showUpdate');                //update report one row of the Catering Order Report
Route::get('/income-of-catering-reports','CateringReportController@totalIncomeOFCateringReports');
Route::get('/download-catering-report','CateringReportController@downloadPDF');
Route::get('/get-report','CateringReportController@getAllReports');


//updateCateringOrderReport.blade.php
Route::get('/update-catering-reports/{id}','CateringReportController@updateReport'); //validation






Route::get('/viewcateringorderpay','Catering_orderController@showCateringOderPayDetails');
Route::get('/deletecateringorderpay/{id}','Catering_orderController@deleteCateringOderPayment');


Route::get('/CaterorderPaystore','Catering_orderController@storeCateringOrderPay');
Route::get('/CaterorderPayget','Catering_orderController@getCateringOrderPay');*/


/**
 * Author:hiru
 */
Route::get('/report-index', function () {
    return view('admin.reportindex');
})->middleware('role:superadministrator');
Route::get('/all-take-to-rep','OrderController@getorderpay')->middleware('role:superadministrator');
Route::get('/cal-income','OrderController@calcTotIncome')->middleware('role:superadministrator');
Route::get('/delete-one-order-income/{id}','OrderController@deleteOderPayment')->middleware('role:superadministrator');
Route::get('/search-by-order-type','OrderController@searchTakeAwayAll')->middleware('role:superadministrator');
Route::get('/all-take-away-pdf','OrderController@downloadTakeAwayPDF')->middleware('role:superadministrator');
Route::get('/get-normal-order-income','NormalReportController@getAllNormalOrderReports')->middleware('role:superadministrator');
Route::get('/delete-normal-order-income/{id}','NormalReportController@destroyNormalOrderReport')->middleware('role:superadministrator');
Route::get('/to-update-form-normal-order-income/{id}','NormalReportController@getOneNormalOrderReports')->middleware('role:superadministrator');
Route::get('/update-normal-orders-income/{id}','NormalReportController@editOneNormalOrderReports')->middleware('role:superadministrator');
Route::get('/download-normal-order-reports','NormalReportController@downloadNormalReportsPDF')->middleware('role:superadministrator');

Route::get('/all-catering-to-rep','Catering_orderController@getCateringOrderPay')->middleware('role:superadministrator');
Route::get('/delete-one-order-income-catering/{id}','Catering_orderController@deleteCateringOderPayment')->middleware('role:superadministrator');
Route::get('/search-by-catering-package-name','Catering_orderController@searchCateringAll')->middleware('role:superadministrator');
Route::get('/calc-total-catering-income','Catering_orderController@calcTotIncomeCatering')->middleware('role:superadministrator');
Route::get('/get-all-catering-income','CateringReportController@getAllCateringOrderReports')->middleware('role:superadministrator');
Route::get('/delete-one-catering-report/{id}','CateringReportController@destroyCateringOrderReport')->middleware('role:superadministrator');
Route::get('/to-update-form-catering-order-income/{id}','CateringReportController@getOneCateringOrderReports')->middleware('role:superadministrator');
Route::get('/update-catering-order-income/{id}','CateringReportController@editOneCateringOrderReports')->middleware('role:superadministrator');
Route::get('/download-catering-order-reports','CateringReportController@downloadCateringReportsPDF')->middleware('role:superadministrator');
Route::get('/all-catering-pdf','Catering_orderController@downloadCateringPDF')->middleware('role:superadministrator');