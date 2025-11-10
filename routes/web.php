<?php
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

Route::view('/Restaurant_browser', 'software.Solver.browser_screen.hotelmanagement_browser');
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

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/School_browser', 'software.Solver.browser_screen.school_browser');
Route::view('/School_youtube', 'software.Solver.youtube_page.School_youtube');
Route::view('/School_features', 'software.Solver.features_list.School_features');
Route::view('/School_download', 'software.Solver.software_download.School_download');

Route::view('/cloud_browser', 'software.Solver.browser_screen.cloud_browser');
Route::view('/cloud_youtube', 'software.Solver.youtube_page.cloud_youtube');
Route::view('/cloud_features', 'software.Solver.features_list.cloud_features');
Route::view('/cloud_download', 'software.Solver.software_download.cloud_download');


    