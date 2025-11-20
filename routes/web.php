<?php
use App\Models\productdetail;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PicController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\ItemgroupController;
use App\Http\Controllers\ComponyinfoController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\CompinfofooterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/admin', function () {
    return view('home22');
});

Route::get('/', function () {
    return view('index');
});
// Route::get('/account', function () {
//     return view('master.account');
// });

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/second_index', [LandingpageController::class, 'show_secondindexpage'])->name('second_index');


// profile Route--------------------------------------------------
//Route::get('/userprofilelist', [App\Http\Controllers\userprofileController::class, 'show'])->name('userprofilelist');
Route::get('/userprofile', [App\Http\Controllers\userprofileController::class, 'show_userprofile'])->name('userprofile');
Route::get('/deleteprofile/{id}', [App\Http\Controllers\userprofileController::class, 'delete_userprofile'])->name('delete_userprofil');
Route::get('/viwprofileform/{id}', [App\Http\Controllers\userprofileController::class, 'show_user_form'])->name('viwprofileform');
Route::post('/modify', [App\Http\Controllers\userprofileController::class, 'modify']);






// master Route---item_group -----------------------------------------------
 Route::get('itemgroups',[App\Http\Controllers\ItemgroupController::class,'index']);
 Route::Post('itemgroups',[App\Http\Controllers\ItemgroupController::class,'store']);
 Route::get('deleteitemgroups/{id}',[App\Http\Controllers\ItemgroupController::class,'destroy']);
 Route::get('howediteditemgroups/{id}',[App\Http\Controllers\ItemgroupController::class,'show']);
// ====================================================================================================
//-----------PRODUCT DETAILS ---------------------------------------------------
Route::resource('productdetail', App\Http\Controllers\productdetailcontroller::class);




 // salary Route---salaryslip-----------------------------------------------

Route::resource('salaryslip', App\Http\Controllers\salarycontroller::class);
Route::POST('salaryslip_update', [App\Http\Controllers\salarycontroller::class, 'update']);
Route::post('software_store', [App\Http\Controllers\salarycontroller::class, 'softwareStore']);
Route::delete('/software_delete/{id}', [App\Http\Controllers\salarycontroller::class, 'deleteSale']);
Route::delete('/amc_delete/{id}', [App\Http\Controllers\salarycontroller::class, 'deleteAmc']);

Route::post('amc_store', [App\Http\Controllers\salarycontroller::class, 'amcStore']);


Route::get('/salaryslip/getEmployees', function () {
    return App\Models\User::select('id', 'name', 'email')->get();
})->name('salaryslip.getEmployees');
Route::get('/get-user-details/{id}', [App\Http\Controllers\salarycontroller::class, 'getUserDetails']);
Route::get('/salaryslip/employee/{id}', [App\Http\Controllers\salarycontroller::class, 'getEmployeeDetails']);
Route::get('/salaryslip/employee/{id}/amcs', [App\Http\Controllers\salarycontroller::class, 'getEmployeeamcs']);
Route::get('/salaryslip/employee/{id}/sales', [App\Http\Controllers\salarycontroller::class, 'getEmployeeSales']);

// master Route---item-----------------------------------------------
Route::get('/item', [App\Http\Controllers\ItemController::class, 'index'])->name('item');
Route::get('/deleteitem/{id}', [App\Http\Controllers\ItemController::class, 'destroy']);
Route::get('itemform', [App\Http\Controllers\ItemController::class, 'itemform']);
Route::post('saveitem', [App\Http\Controllers\ItemController::class, 'insertitem']);
Route::get('/showedititem/{id}', [App\Http\Controllers\ItemController::class, 'show_item_form_edit']);
Route::put('/edititem', [App\Http\Controllers\ItemController::class, 'edit_item']);
Route::get('/itemformview/{id}', [App\Http\Controllers\ItemController::class, 'itemformview']);
// master Route---Comapny-----------------------------------------------
Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index'])->name('company');
Route::get('/savecompany', [App\Http\Controllers\CompanyController::class, 'create']);
Route::post('/savecompany', [App\Http\Controllers\CompanyController::class, 'create']);
Route::get('/deletecompany/{id}', [App\Http\Controllers\CompanyController::class, 'destroy']);
Route::get('/showeditecompany/{id}', [App\Http\Controllers\CompanyController::class, 'show_company_form_edit']);
Route::put('/editcompany', [App\Http\Controllers\CompanyController::class, 'edit_company']);

//Account Route ---------------------------------------------------------------------------
Route::get('/account',[App\Http\Controllers\AccountController::class,'index']);
Route::get('/account_dt',[App\Http\Controllers\AccountController::class,'index_dt']);
Route::get('/account_import',[App\Http\Controllers\AccountController::class,'account_import']);
Route::post('account_import',[App\Http\Controllers\AccountController::class,'import']);
Route::post('downloadExcel',[App\Http\Controllers\AccountController::class,'downloadExcel']);
Route::post('downloadExcel_todo',[App\Http\Controllers\AccountController::class,'downloadExcel_todo']);

Route::get('/accountform', [App\Http\Controllers\AccountController::class, 'accountform']);
Route::post('/create', [App\Http\Controllers\AccountController::class, 'create']);
Route::get('/deleteaccount/{id}', [App\Http\Controllers\AccountController::class, 'destroy']);
Route::get('/showeditaccount/{id}', [App\Http\Controllers\AccountController::class, 'show_account_form_edit']);
Route::put('/editaccount', [App\Http\Controllers\AccountController::class, 'edit_account']);
Route::get('/accountformview/{id}', [App\Http\Controllers\AccountController::class, 'accountformview']);
//Amc Entery--------------------------------------------------------------------------------------------

Route::get('/delete_amc/{id}', [App\Http\Controllers\AmcController::class, 'destroy']);
Route::get('/show_edit_amc/{id}', [App\Http\Controllers\AmcController::class, 'show_edit_amc']);
Route::put('/update_amc', [App\Http\Controllers\AmcController::class, 'update_amc']);
// Route::POST('/update_amc', [App\Http\Controllers\AmcController::class, 'update_amc']);
Route::get('/amc_view/{id}', [App\Http\Controllers\AmcController::class, 'amc_view']);




Route::get('amcform',[App\Http\Controllers\AmcController::class,'index'])->name('amcform');
Route::get('amclist',[App\Http\Controllers\AmcController::class,'amclist'])->name('amclist');
Route::post('amclist',[App\Http\Controllers\AmcController::class,'amclistsearch'])->name('amclistsearch');
Route::post('/amccreat',[App\Http\Controllers\AmcController::class, 'create']);
Route::get('/export-amc',[App\Http\Controllers\AmcController::class, 'export'])->name('amc.export');  
Route::get('/amclist-pdf',[App\Http\Controllers\AmcController::class, 'pdf'])->name('amcpdf');  
Route::get('/amclist-mail',[App\Http\Controllers\AmcController::class, 'sendAmcListEmail'])->name('amcemail');  
Route::get('/amclist-print',[App\Http\Controllers\AmcController::class, 'printamclist'])->name('printamclist');
Route::get('amclisttest',[App\Http\Controllers\AmcController::class,'amclisttest'])->name('amclisttest');







//Amc report--------------------------------------------------------------------------------------------
Route::get('amclist_due',[App\Http\Controllers\AmcController::class,'amclist_due'])->name('amclistdue');
Route::post('amclist_due',[App\Http\Controllers\AmcController::class,'amclist_due'])->name('amclistsdue');
Route::get('amclist_due_month',[App\Http\Controllers\AmcController::class,'amclist_due_month'])->name('amclist_due_month');
Route::post('amclist_due_month',[App\Http\Controllers\AmcController::class,'amclist_due_month'])->name('amclist_due_month');
Route::post('amclist_end_month',[App\Http\Controllers\AmcController::class,'amclist_end_month'])->name('amclist_end_month');
Route::get('amclist_end_month',[App\Http\Controllers\AmcController::class,'amclist_end_month'])->name('amclist_end_month');
Route::post('amc_month_inactive',[App\Http\Controllers\AmcController::class,'amc_month_inactive'])->name('amc_month_inactive');
Route::get('amc_month_inactive',[App\Http\Controllers\AmcController::class,'amc_month_inactive'])->name('amc_month_inactive');
Route::post('amc_inactive',[App\Http\Controllers\AmcController::class,'amc_inactive']);
Route::get('amc_inactive',[App\Http\Controllers\AmcController::class,'amc_inactive'])->name('amc_inactive');
Route::get('amc_datatable',[App\Http\Controllers\AmcController::class,'amc_datatable'])->name('amc_datatable');

//-----Company_info-Setting--------------------------------------- 
route::get('company_info_form',[App\Http\Controllers\ComponyinfoController::class,'show_form']);
route::Put('compinfo_store',[App\Http\Controllers\ComponyinfoController::class,'store']);
route::get('comp_pic_form',[App\Http\Controllers\PicController::class,'index']);
route::put('comp_pic_store',[App\Http\Controllers\PicController ::class,'store']);
route::put('comp_pic_qrstore',[App\Http\Controllers\PicController::class,'comp_pic_qrstore']);
route::put('comp_pic_sealstore',[App\Http\Controllers\PicController::class,'comp_pic_sealstore']);
route::put('comp_pic_signaturestore',[App\Http\Controllers\PicController::class,'comp_pic_signaturestore']);
route::put('comp_pic_brandstore',[App\Http\Controllers\PicController::class,'comp_pic_brandstore']);
route::get('comp_info_footer',[App\Http\Controllers\CompinfofooterController::class,'index']);
route::put('comp_info_footer',[App\Http\Controllers\CompinfofooterController::class,'store']);

//---------Tenent setting ----------------
route::get('tenant_show',[App\Http\Controllers\TenantController::class,'index']);
route::post('tenant_show',[App\Http\Controllers\TenantController::class,'store']);
route::get('tenantlist',[App\Http\Controllers\TenantController::class,'list']);
route::get('super_admin',[App\Http\Controllers\TenantController::class,'show_superadmin']);
Route::get('delete_tenant/{id}',[App\Http\Controllers\TenantController::class,'destroy']);



// Route::group(['middleware' => ['role:super-admin|admin']], function() {

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);

// }); 

//-----Call Mangement  ---------------------------------------------------
Route::get('todolist',[App\Http\Controllers\TodoController::class,'index']);
Route::get('quotation',[App\Http\Controllers\TodoController::class,'quotation']);

Route::get('todolist_dt',[App\Http\Controllers\TodoController::class,'index_dt']);
Route::get('tododonelist',[App\Http\Controllers\TodoController::class,'index_done']);
Route::get('todolist_report/{report_value}',[App\Http\Controllers\TodoController::class,'todolist_report']);

Route::post('todolist',[App\Http\Controllers\TodoController::class,'store']);
Route::put('tododone',[App\Http\Controllers\TodoController::class,'edit']);
Route::get('/deletetodo/{id}',[App\Http\Controllers\TodoController::class,'destroy']);
Route::get('/showtodo/{id}', [App\Http\Controllers\TodoController::class, 'show']);
Route::put('/updatetodo', [App\Http\Controllers\TodoController::class, 'update']);
Route::get('todo_import_show', [App\Http\Controllers\TodoController::class, 'import_show']);
Route::post('todolist_import', [App\Http\Controllers\TodoController::class, 'import']);
//-----Call Mangement  ---------------------------------------------------
Route::get('coldcall',[App\Http\Controllers\LeadController::class,'index']);
Route::get('coldcall_register',[App\Http\Controllers\LeadController::class,'coldcall_register']);
Route::get('entry_by_customer',[App\Http\Controllers\LeadController::class,'entry_by_customer']);
Route::get('todo_by_customer',[App\Http\Controllers\LeadController::class,'todo_by_customer']);
Route::Post('addlead',[App\Http\Controllers\LeadController::class,'store']);
Route::Post('storelead_bycustomer',[App\Http\Controllers\LeadController::class,'storelead_bycustomer']);
Route::Post('store_todo_bycustomer',[App\Http\Controllers\LeadController::class,'store_todo_bycustomer']);
Route::get('followup',[App\Http\Controllers\LeadController::class,'followup']);
Route::get('followup_list',[App\Http\Controllers\LeadController::class,'followup_list']);
Route::Post('followup_list_datewise',[App\Http\Controllers\LeadController::class,'followup_list_date_wise']);
Route::get('addfollowup/{id}',[App\Http\Controllers\LeadController::class,'addfollowup']);
Route::post('newfollowup',[App\Http\Controllers\LeadController::class,'newfollowup']);
//---------------------------ajex using model ----------------------------------------
Route::get('testshowform',[App\Http\Controllers\TestController::class,'index']);
Route::get('showcustomerajex',[App\Http\Controllers\TestController::class,'show']);
Route::post('savecustomer',[App\Http\Controllers\TestController::class,'create']);
Route::get('searchbox',[App\Http\Controllers\TestController::class,'searchbox']);
Route::get('searchAccount',[App\Http\Controllers\TestController::class,'searchAccount']);
Route::view('/dht', 'software.Solver.dht_index');
Route::view('/garment_retail_browser', 'software.Solver.browser_screen.garment_retail');
Route::view('/garment_retail_youtube', 'software.Solver.youtube_page.garment_retail_youtube');
Route::view('/garment_retail_features', 'software.Solver.features_list.garment_retail_features');
Route::view('/garment_download', 'software.Solver.software_download.garment_download');

Route::view('/hardware_browser', 'software.Solver.browser_screen.hardware_browser');
Route::view('/hardware_youtube', 'software.Solver.youtube_page.hardware_youtube');
Route::view('/hardware_features', 'software.Solver.features_list.hardware_features');
Route::view('/hardware_download', 'software.Solver.software_download.hardware_download');

Route::view('/workshop_browser', 'software.Solver.browser_screen.workshop_browser');
Route::view('/workshop_youtube', 'software.Solver.youtube_page.workshop_youtube');
Route::view('/workshop_features', 'software.Solver.features_list.workshop_features');
Route::view('/workshop_download', 'software.Solver.software_download.workshop_download');

Route::view('/footware_browser', 'software.Solver.browser_screen.footware_browser');
Route::view('/footware_youtube', 'software.Solver.youtube_page.footware_youtube');
Route::view('/footware_features', 'software.Solver.features_list.footware_features');
Route::view('/footware_download', 'software.Solver.software_download.footware_download');

Route::view('/pathology_browser', 'software.Solver.browser_screen.pathology_browser');
Route::view('/pathology_youtube', 'software.Solver.youtube_page.pathology_youtube');
Route::view('/pathology_features', 'software.Solver.features_list.pathology_features');
Route::view('/pathology_download', 'software.Solver.software_download.pathology_download');

Route::view('/hotelmanagement_browser', 'software.Solver.browser_screen.hotelmanagement_browser');
Route::view('/hotelmanagement_youtube', 'software.Solver.youtube_page.hotelmanagement_youtube');
Route::view('/hotelmanagement_features', 'software.Solver.features_list.hotelmanagement_features');
Route::view('/hotelmanagement_download', 'software.Solver.software_download.hotelmanagement_download');

Route::view('/Restaurant_browser', 'software.Solver.browser_screen.Restaurant_browser');
Route::view('/Restaurant_youtube', 'software.Solver.youtube_page.Restaurant_youtube');
Route::view('/Restaurant_features', 'software.Solver.features_list.Restaurant_features');
Route::view('/Restaurant_download', 'software.Solver.software_download.Restaurant_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/college_browser', 'software.Solver.browser_screen.college_browser');
Route::view('/college_youtube', 'software.Solver.youtube_page.college_youtube');
Route::view('/college_features', 'software.Solver.features_list.college_features');
Route::view('/college_download', 'software.Solver.software_download.college_download');

Route::view('/Transport_browser', 'software.Solver.browser_screen.Transport_browser');
Route::view('/Transport_youtube', 'software.Solver.youtube_page.Transport_youtube');
Route::view('/Transport_features', 'software.Solver.features_list.Transport_features');
Route::view('/Transport_download', 'software.Solver.software_download.Transport_download');

Route::view('/medical_browser', 'software.Solver.browser_screen.medical_browser');
Route::view('/medical_youtube', 'software.Solver.youtube_page.medical_youtube');
Route::view('/medical_features', 'software.Solver.features_list.medical_features');
Route::view('/medical_download', 'software.Solver.software_download.medical_download');

Route::view('/fmcg_browser', 'software.Solver.browser_screen.fmcg_browser');
Route::view('/fmcg_youtube', 'software.Solver.youtube_page.fmcg_youtube');
Route::view('/fmcg_features', 'software.Solver.features_list.fmcg_features');
Route::view('/fmcg_download', 'software.Solver.software_download.fmcg_download');

Route::view('/kirana_browser', 'software.Solver.browser_screen.kirana_browser');
Route::view('/kirana_youtube', 'software.Solver.youtube_page.kirana_youtube');
Route::view('/kirana_features', 'software.Solver.features_list.kirana_features');
Route::view('/kirana_download', 'software.Solver.software_download.kirana_download');

Route::view('/computer_browser', 'software.Solver.browser_screen.computer_browser');
Route::view('/computer_youtube', 'software.Solver.youtube_page.computer_youtube');
Route::view('/computer_features', 'software.Solver.features_list.computer_features');
Route::view('/computer_download', 'software.Solver.software_download.computer_download');

Route::view('/cctv_browser', 'software.Solver.browser_screen.cctv_browser');
Route::view('/cctv_youtube', 'software.Solver.youtube_page.cctv_youtube');
Route::view('/cctv_features', 'software.Solver.features_list.cctv_features');
Route::view('/cctv_download', 'software.Solver.software_download.cctv_download');

Route::view('/aquaguard_browser', 'software.Solver.browser_screen.aquaguard_browser');
Route::view('/aquaguard_youtube', 'software.Solver.youtube_page.aquaguard_youtube');
Route::view('/aquaguard_features', 'software.Solver.features_list.aquaguard_features');
Route::view('/aquaguard_download', 'software.Solver.software_download.aquaguard_download');

Route::view('/Sc_browser', 'software.Solver.browser_screen.sc_browser');
Route::view('/Sc_youtube', 'software.Solver.youtube_page.Sc_youtube');
Route::view('/Sc_features', 'software.Solver.features_list.Sc_features');
Route::view('/Sc_download', 'software.Solver.software_download.Sc_download');

Route::view('/patanjali_browser', 'software.Solver.browser_screen.patanjali_browser');
Route::view('/patanjali_youtube', 'software.Solver.youtube_page.patanjali_youtube');
Route::view('/patanjali_features', 'software.Solver.features_list.patanjali_features');
Route::view('/patanjali_download', 'software.Solver.software_download.patanjali_download');

Route::view('/bag_browser', 'software.Solver.browser_screen.bag_browser');
Route::view('/bag_youtube', 'software.Solver.youtube_page.bag_youtube');
Route::view('/bag_features', 'software.Solver.features_list.bag_features');
Route::view('/bag_download', 'software.Solver.software_download.bag_download');

Route::view('/dairy_browser', 'software.Solver.browser_screen.dairy_browser');
Route::view('/dairy_youtube', 'software.Solver.youtube_page.dairy_youtube');
Route::view('/dairy_features', 'software.Solver.features_list.dairy_features');
Route::view('/dairy_download', 'software.Solver.software_download.dairy_download');

Route::view('/wine_browser', 'software.Solver.browser_screen.wine_browser');
Route::view('/wine_youtube', 'software.Solver.youtube_page.wine_youtube');
Route::view('/wine_features', 'software.Solver.features_list.wine_features');
Route::view('/wine_download', 'software.Solver.software_download.wine_download');

Route::view('/sweet_browser', 'software.Solver.browser_screen.sweet_browser');
Route::view('/sweet_youtube', 'software.Solver.youtube_page.sweet_youtube');
Route::view('/sweet_features', 'software.Solver.features_list.sweet_features');
Route::view('/sweet_download', 'software.Solver.software_download.sweet_download');

Route::view('/surgical_browser', 'software.Solver.browser_screen.surgical_browser');
Route::view('/surgical_youtube', 'software.Solver.youtube_page.surgical_youtube');
Route::view('/surgical_features', 'software.Solver.features_list.surgical_features');
Route::view('/surgical_download', 'software.Solver.software_download.surgical_download');

Route::view('/salon_browser', 'software.Solver.browser_screen.salon_browser');
Route::view('/salon_youtube', 'software.Solver.youtube_page.salon_youtube');
Route::view('/salon_features', 'software.Solver.features_list.salon_features');
Route::view('/salon_download', 'software.Solver.software_download.salon_download');

Route::view('/saree_browser', 'software.Solver.browser_screen.saree_browser');
Route::view('/saree_youtube', 'software.Solver.youtube_page.saree_youtube');
Route::view('/saree_features', 'software.Solver.features_list.saree_features');
Route::view('/saree_download', 'software.Solver.software_download.saree_download');

Route::view('/sainatry_browser', 'software.Solver.browser_screen.sainatry_browser');
Route::view('/sainatry_youtube', 'software.Solver.youtube_page.sainatry_youtube');
Route::view('/sainatry_features', 'software.Solver.features_list.sainatry_features');
Route::view('/sainatry_download', 'software.Solver.software_download.sainatry_download');

Route::view('/print_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/print_youtube', 'software.Solver.youtube_page.print_youtube');
Route::view('/print_features', 'software.Solver.features_list.print_features');
Route::view('/print_download', 'software.Solver.software_download.print_download');

Route::view('/pet_browser', 'software.Solver.browser_screen.pet_browser');
Route::view('/pet_youtube', 'software.Solver.youtube_page.pet_youtube');
Route::view('/pet_features', 'software.Solver.features_list.pet_features');
Route::view('/pet_download', 'software.Solver.software_download.pet_download');

Route::view('/paint_browser', 'software.Solver.browser_screen.paint_browser');
Route::view('/paint_youtube', 'software.Solver.youtube_page.paint_youtube');
Route::view('/paint_features', 'software.Solver.features_list.paint_features');
Route::view('/paint_download', 'software.Solver.software_download.paint_download');

Route::view('/organic_browser', 'software.Solver.browser_screen.organic_browser');
Route::view('/organic_youtube', 'software.Solver.youtube_page.organic_youtube');
Route::view('/organic_features', 'software.Solver.features_list.organic_features');
Route::view('/organic_download', 'software.Solver.software_download.organic_download');

Route::view('/optical_browser', 'software.Solver.browser_screen.optical_browser');
Route::view('/optical_youtube', 'software.Solver.youtube_page.optical_youtube');
Route::view('/optical_features', 'software.Solver.features_list.optical_features');
Route::view('/optical_download', 'software.Solver.software_download.optical_download');

Route::view('/mobile_browser', 'software.Solver.browser_screen.mobile_browser');
Route::view('/mobile_youtube', 'software.Solver.youtube_page.mobile_youtube');
Route::view('/mobile_features', 'software.Solver.features_list.mobile_features');
Route::view('/mobile_download', 'software.Solver.software_download.mobile_download');

Route::view('/marble_browser', 'software.Solver.browser_screen.marble_browser');
Route::view('/marble_youtube', 'software.Solver.youtube_page.marble_youtube');
Route::view('/marble_features', 'software.Solver.features_list.marble_features');
Route::view('/marble_download', 'software.Solver.software_download.marble_download');

Route::view('/lubricant_browser', 'software.Solver.browser_screen.lubricant_browser');
Route::view('/lubricant_youtube', 'software.Solver.youtube_page.lubricant_youtube');
Route::view('/lubricant_features', 'software.Solver.features_list.lubricant_features');
Route::view('/lubricant_download', 'software.Solver.software_download.lubricant_download');

Route::view('/kirana_browser', 'software.Solver.browser_screen.kirana_browser');
Route::view('/kirana_youtube', 'software.Solver.youtube_page.kirana_youtube');
Route::view('/kirana_features', 'software.Solver.features_list.kirana_features');
Route::view('/kirana_download', 'software.Solver.software_download.kirana_download');

Route::view('/jewellery_browser', 'software.Solver.browser_screen.jewellery_browser');
Route::view('/jewellery_youtube', 'software.Solver.youtube_page.jewellery_youtube');
Route::view('/jewellery_features', 'software.Solver.features_list.jewellery_features');
Route::view('/jewellery_download', 'software.Solver.software_download.jewellery_download');

Route::view('/grain_browser', 'software.Solver.browser_screen.grain_browser');
Route::view('/grain_youtube', 'software.Solver.youtube_page.grain_youtube');
Route::view('/grain_features', 'software.Solver.features_list.grain_features');
Route::view('/grain_download', 'software.Solver.software_download.grain_download');

Route::view('/glass_browser', 'software.Solver.browser_screen.glass_browser');
Route::view('/glass_youtube', 'software.Solver.youtube_page.glass_youtube');
Route::view('/glass_features', 'software.Solver.features_list.glass_features');
Route::view('/glass_download', 'software.Solver.software_download.glass_download');

Route::view('/gift_browser', 'software.Solver.browser_screen.gift_browser');
Route::view('/gift_youtube', 'software.Solver.youtube_page.gift_youtube');
Route::view('/gift_features', 'software.Solver.features_list.gift_features');
Route::view('/gift_download', 'software.Solver.software_download.gift_download');

Route::view('/furniture_browser', 'software.Solver.browser_screen.furniture_browser');
Route::view('/furniture_youtube', 'software.Solver.youtube_page.furniture_youtube');
Route::view('/furniture_features', 'software.Solver.features_list.furniture_features');
Route::view('/furniture_download', 'software.Solver.software_download.furniture_download');

Route::view('/flower_browser', 'software.Solver.browser_screen.flower_browser');
Route::view('/flower_youtube', 'software.Solver.youtube_page.flower_youtube');
Route::view('/flower_features', 'software.Solver.features_list.flower_features');
Route::view('/flower_download', 'software.Solver.software_download.flower_download');

Route::view('/fire_browser', 'software.Solver.browser_screen.fire_browser');
Route::view('/fire_youtube', 'software.Solver.youtube_page.fire_youtube');
Route::view('/fire_features', 'software.Solver.features_list.fire_features');
Route::view('/fire_download', 'software.Solver.software_download.fire_download');

Route::view('/electric_browser', 'software.Solver.browser_screen.electric_browser');
Route::view('/electric_youtube', 'software.Solver.youtube_page.electric_youtube');
Route::view('/electric_features', 'software.Solver.features_list.electric_features');
Route::view('/electric_download', 'software.Solver.software_download.electric_download');

Route::view('/electronic_browser', 'software.Solver.browser_screen.electronic_browser');
Route::view('/electronic_youtube', 'software.Solver.youtube_page.electronic_youtube');
Route::view('/electronic_features', 'software.Solver.features_list.electronic_features');
Route::view('/electronic_download', 'software.Solver.software_download.electronic_download');

Route::view('/cycle_browser', 'software.Solver.browser_screen.cycle_browser');
Route::view('/cycle_youtube', 'software.Solver.youtube_page.cycle_youtube');
Route::view('/cycle_features', 'software.Solver.features_list.cycle_features');
Route::view('/cycle_download', 'software.Solver.software_download.cycle_download');

Route::view('/Dealer_browser', 'software.Solver.browser_screen.Dealer_browser');
Route::view('/Dealer_youtube', 'software.Solver.youtube_page.Dealer_youtube');
Route::view('/Dealer_features', 'software.Solver.features_list.Dealer_features');
Route::view('/Dealer_download', 'software.Solver.software_download.Dealer_download');

Route::view('/cloth_browser', 'software.Solver.browser_screen.cloth_browser');
Route::view('/cloth_youtube', 'software.Solver.youtube_page.cloth_youtube');
Route::view('/cloth_features', 'software.Solver.features_list.cloth_features');
Route::view('/cloth_download', 'software.Solver.software_download.cloth_download');

Route::view('/building_browser', 'software.Solver.browser_screen.building_browser');
Route::view('/building_youtube', 'software.Solver.youtube_page.building_youtube');
Route::view('/building_features', 'software.Solver.features_list.building_features');
Route::view('/building_download', 'software.Solver.software_download.building_download');

Route::view('/book_browser', 'software.Solver.browser_screen.book_browser');
Route::view('/book_youtube', 'software.Solver.youtube_page.book_youtube');
Route::view('/book_features', 'software.Solver.features_list.book_features');
Route::view('/book_download', 'software.Solver.software_download.book_download');

Route::view('/bakery_browser', 'software.Solver.browser_screen.bakery_browser');
Route::view('/bakery_youtube', 'software.Solver.youtube_page.bakery_youtube');
Route::view('/bakery_features', 'software.Solver.features_list.bakery_features');
Route::view('/bakery_download', 'software.Solver.software_download.bakery_download');

Route::view('/toy_browser', 'software.Solver.browser_screen.toy_browser');
Route::view('/toy_youtube', 'software.Solver.youtube_page.toy_youtube');
Route::view('/toy_features', 'software.Solver.features_list.toy_features');
Route::view('/toy_download', 'software.Solver.software_download.toy_download');

Route::view('/ayurvedik_browser', 'software.Solver.browser_screen.ayurvedik_browser');
Route::view('/ayurvedik_youtube', 'software.Solver.youtube_page.ayurvedik_youtube');
Route::view('/ayurvedik_features', 'software.Solver.features_list.ayurvedik_features');
Route::view('/ayurvedik_download', 'software.Solver.software_download.ayurvedik_download');

Route::view('/pump_browser', 'software.Solver.browser_screen.pump_browser');
Route::view('/pump_youtube', 'software.Solver.youtube_page.pump_youtube');
Route::view('/pump_features', 'software.Solver.features_list.pump_features');
Route::view('/pump_download', 'software.Solver.software_download.pump_download');

Route::view('/online_browser', 'software.Solver.browser_screen.online_browser');
Route::view('/online_youtube', 'software.Solver.youtube_page.online_youtube');
Route::view('/online_features', 'software.Solver.features_list.online_features');
Route::view('/online_download', 'software.Solver.software_download.online_download');

Route::view('/speed_browser', 'software.Solver.browser_screen.speed_browser');
Route::view('/speed_youtube', 'software.Solver.youtube_page.speed_youtube');
Route::view('/speed_features', 'software.Solver.features_list.speed_features');
Route::view('/speed_download', 'software.Solver.software_download.speed_download');

Route::view('/cloud_browser', 'software.Solver.browser_screen.cloud_browser');
Route::view('/cloud_youtube', 'software.Solver.youtube_page.cloud_youtube');
Route::view('/cloud_features', 'software.Solver.features_list.cloud_features');
Route::view('/cloud_download', 'software.Solver.software_download.cloud_download');


    