<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Report_anlysis;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ComplianceController;
use App\Http\Controllers\RPVRIVController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\LembarKerjaController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\ReportAnalysisController;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\DevelopJourneyController;
use App\Http\Controllers\authentications\AccountSettingsAccount;
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
    return view('portal.home');
});
Route::get('/about', function () {
    return view('portal.about');
});
Route::get('/link', function () {
    return view('portal.link');
});

Route::get('/hello', function () {
    return view('welcome');
}); 

Route::get('/chart/document', [HomeController::class, 'echart']);
Route::get('/chart/document1', [HomeController::class, 'echart1']);
Route::get('/chart/document2', [HomeController::class, 'echart2']);

Route::get('fullcalender', [FullCalendarController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalendarController::class, 'ajax']);

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);
Route::get('/login', [LoginBasic::class, 'index'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function() {
    Route::group(['prefix' => 'development-journey'], function() {
        Route::get('/eksternal',  [DevelopJourneyController::class, 'dev_logbook_ex'])->name('dev_logbook_ex');
        Route::get('/eksternal/eksternal_timeline',  [DevelopJourneyController::class, 'eksternal_timeline'])->name('eksternal_timeline');
        Route::get('/eksternal/eksternal_timeline/detail', [DevelopJourneyController::class, 'external_timeline_detail'])->name('external_timeline_detail');
        Route::get('/finish_good',  [DevelopJourneyController::class, 'dev_logbook_fg'])->name('dev_logbook_fg');
        Route::get('/finish_good/finish_good_timeline',  [DevelopJourneyController::class, 'fg_timeline'])->name('fg_timeline');
        Route::get('/finish_good/finish_good_timeline/detail', [DevelopJourneyController::class, 'fg_timeline_detail'])->name('fg_timeline_detail');
        Route::get('/raw_material',  [DevelopJourneyController::class, 'dev_logbook_rm'])->name('dev_logbook_rm');
        Route::get('/raw_material/raw_material_timeline',  [DevelopJourneyController::class, 'rm_timeline'])->name('rm_timeline');
        Route::get('/raw_material/raw_material_timeline/detail', [DevelopJourneyController::class, 'rm_timeline_detail'])->name('rm_timeline_detail');
        Route::get('/mikrobiologi',  [DevelopJourneyController::class, 'dev_logbook_mikro'])->name('dev_logbook_mikro');
        Route::get('/mikrobiologi/mikrobiologi_timeline',  [DevelopJourneyController::class, 'mikro_timeline'])->name('mikro_timeline');
        Route::get('/mikrobiologi/mikrobiologi_timeline/detail', [DevelopJourneyController::class, 'mikro_timeline_detail'])->name('mikro_timeline_detail');
        Route::post('/addProduct',  [DevelopJourneyController::class, 'addProduct'])->name('addProduct');
        Route::post('/addZatAktif',  [DevelopJourneyController::class, 'addZatAktif'])->name('addZatAktif');
        Route::post('/addTimeline',  [DevelopJourneyController::class, 'addTimeline'])->name('addTimeline');
        Route::post('/addDocument',  [DevelopJourneyController::class, 'addDocument'])->name('addDocument');
        Route::delete('/delete_product',  [DevelopJourneyController::class, 'delete_product'])->name('delete_product');
        Route::delete('/delete_document',  [DevelopJourneyController::class, 'delete_document'])->name('delete_document');
        Route::delete('/delete_Timeline',  [DevelopJourneyController::class, 'delete_Timeline'])->name('delete_Timeline');
        Route::post('/updateTimeline1',  [DevelopJourneyController::class, 'updateTimeline1'])->name('updateTimeline1');
        
    });
});

Route::group(['prefix' => 'rpv-riv'], function() {
    Route::get('/finish_good',  [RPVRIVController::class, 'RPV_logbook_fg'])->name('RPV_logbook_fg');
    Route::get('/eksternal',  [RPVRIVController::class, 'RPV_logbook_eksternal'])->name('RPV_logbook_eksternal');
    Route::get('/raw_material',  [RPVRIVController::class, 'RPV_logbook_rm'])->name('RPV_logbook_rm');
    Route::get('/mikrobiologi',  [RPVRIVController::class, 'RPV_logbook_mikro'])->name('RPV_logbook_mikro');
    Route::get('/ShowFormRPVRIV',  [RPVRIVController::class, 'ShowFormRPVRIV'])->name('ShowFormRPVRIV');
    Route::post('/addRPVRIV',  [RPVRIVController::class, 'addRPVRIV'])->name('addRPVRIV');
    Route::post('/update_RPVRIV', [RPVRIVController::class, 'update_RPVRIV'])->name('update_RPVRIV');
    Route::post('/approve_1', [RPVRIVController::class, 'approve_1'])->name('approve_1');
    Route::post('/approve_2', [RPVRIVController::class, 'approve_2'])->name('approve_2');
    Route::delete('/delete_RPVRIV',  [RPVRIVController::class, 'delete_RPVRIV'])->name('delete_RPVRIV');
});

Route::group(['prefix' => 'documents'], function() {
    Route::get('finish-good', function() { return view('front-view.pages.documents.finish-good'); });
    Route::get('raw-material', function() { return view('front-view.pages.documents.raw-material'); });
    Route::get('mikrobiologi', function() { return view('front-view.pages.documents.mikrobiologi'); });
    Route::get('eksternal', function() { return view('front-view.pages.documents.eksternal'); });
});


Route::post('/excel/export_report', [ExportController::class, 'export_report'])->name('export_report');
Route::post('/excel/export_lka', [ExportController::class, 'export_lka'])->name('export_lka');
Route::group(['prefix' => 'report-analysis'], function () {
    Route::get('/data_tabel_report',  [ReportAnalysisController::class, 'data_tabel_report'])->name('data_tabel_report');
    Route::get('/finish_good',  [ReportAnalysisController::class, 'logbook_fg'])->name('logbook_fg');
    Route::get('/stabilita',  [ReportAnalysisController::class, 'logbook_stabilita'])->name('logbook_stabilita');
    Route::get('/raw_material',  [ReportAnalysisController::class, 'logbook_rm'])->name('logbook_rm');
    Route::get('/mikrobiologi',  [ReportAnalysisController::class, 'logbook_mikro'])->name('logbook_mikro');
    Route::get('/ShowFormReportAnalysis',  [ReportAnalysisController::class, 'ShowFormReportAnalysis'])->name('ShowFormReportAnalysis');
    Route::post('/addReport',  [ReportAnalysisController::class, 'addReport'])->name('addReport');
    Route::post('/update_report', [ReportAnalysisController::class, 'update_report'])->name('update_report');
    Route::delete('/delete_report',  [ReportAnalysisController::class, 'delete_report'])->name('delete_report');
    Route::post('/import',  [ReportAnalysisController::class, 'import'])->name('import');
});

Route::group(['prefix' => 'lka'], function () {
    Route::get('/finish_good',  [LembarKerjaController::class, 'lka_logbook_fg'])->name('lka_logbook_fg');
    Route::get('/stabilita',  [LembarKerjaController::class, 'lka_logbook_stabilita'])->name('lka_logbook_stabilita');
    Route::get('/raw_material',  [LembarKerjaController::class, 'lka_logbook_rm'])->name('lka_logbook_rm');
    Route::get('/mikrobiologi',  [LembarKerjaController::class, 'lka_logbook_mikro'])->name('lka_logbook_mikro');
    Route::get('/ShowFormLKA',  [LembarKerjaController::class, 'ShowFormLKA'])->name('ShowFormLKA');
    Route::post('/addLKA',  [LembarKerjaController::class, 'addLKA'])->name('addLKA');
    Route::post('/update_lka', [LembarKerjaController::class, 'update_lka'])->name('update_lka');
    Route::delete('/delete_lka',  [LembarKerjaController::class, 'delete_lka'])->name('delete_lka');
});
Route::group(['prefix' => 'other'], function () {
    Route::get('/compliance',  [ComplianceController::class, 'logbook_compliance'])->name('logbook_compliance');
    Route::get('/ShowFormCompliance',  [ComplianceController::class, 'ShowFormCompliance'])->name('ShowFormCompliance');
    Route::post('/addCompliance',  [ComplianceController::class, 'addCompliance'])->name('addCompliance');
    Route::post('/update_compliance', [ComplianceController::class, 'update_compliance'])->name('update_compliance');
    Route::delete('/delete_compliance',  [ComplianceController::class, 'delete_compliance'])->name('delete_compliance');
    
    Route::get('/instrument_andev',  [InstrumentController::class, 'logbook_instrument'])->name('logbook_instrument');
    Route::get('/ShowFormInstrument',  [InstrumentController::class, 'ShowFormInstrument'])->name('ShowFormInstrument');
    Route::post('/addInstrument',  [InstrumentController::class, 'addInstrument'])->name('addInstrument');
    Route::post('/update_instrument', [InstrumentController::class, 'update_instrument'])->name('update_instrument');
    Route::delete('/delete_instrument',  [InstrumentController::class, 'delete_instrument'])->name('delete_instrument');
    // Route::get('compliance', function () { return view('front-view.pages.other.compliance'); });
});

Route::group(['prefix' => 'jadwal-stabilita'], function () {
    Route::get('ss-1', function () { return view('front-view.pages.jadwal-stabilita.ss-1'); });
    Route::get('ss-2', function () { return view('front-view.pages.jadwal-stabilita.ss-2'); });
});



Route::get('/rear-view', function() {
    return view('rear-view.index');
});

Route::get('/pages/account-settings-account', [AccountSettingsAccount::class, 'index'])->name('pages-account-settings-account');

Route::group(['prefix' => 'rear-view/development-journey'], function() {
    Route::get('finish-good', function() { return view('rear-view.pages.development-journey.finish-good'); });
    Route::get('finish-good/detail', function() { return view('rear-view.pages.development-journey.finish-good.detail'); });
    Route::get('raw-material', function() { return view('rear-view.pages.development-journey.raw-material'); });
    Route::get('raw-material/detail', function() { return view('rear-view.pages.development-journey.raw-material.detail'); });
    Route::get('mikrobiologi', function() { return view('rear-view.pages.development-journey.mikrobiologi'); });
    Route::get('mikrobiologi/detail', function() { return view('rear-view.pages.development-journey.mikrobiologi.detail'); });
    Route::get('eksternal', function() { return view('rear-view.pages.development-journey.eksternal'); });
    Route::get('eksternal/detail', function() { return view('rear-view.pages.development-journey.eksternal.detail'); });
});

Route::group(['prefix' => 'rear-view/rpv-riv'], function() {
    Route::get('finish-good', function() { return view('rear-view.pages.rpv-riv.finish-good'); });
    Route::get('raw-material', function() { return view('rear-view.pages.rpv-riv.raw-material'); });
    Route::get('mikrobiologi', function() { return view('rear-view.pages.rpv-riv.mikrobiologi'); });
    Route::get('eksternal', function() { return view('rear-view.pages.rpv-riv.eksternal'); });
});

Route::group(['prefix' => 'rear-view/report-analysis'], function () {
    Route::get('finish-good', function () { return view('rear-view.pages.report-analysis.finish-good'); });
    Route::get('raw-material', function () { return view('rear-view.pages.report-analysis.raw-material'); });
    Route::get('stabilita', function () { return view('rear-view.pages.report-analysis.stabilita'); });
    Route::get('mikrobiologi', function () { return view('rear-view.pages.report-analysis.mikrobiologi'); });
});

Route::group(['prefix' => 'rear-view/lka'], function () {
    Route::get('finish-good', function () { return view('rear-view.pages.lka.finish-good'); });
    Route::get('raw-material', function () { return view('rear-view.pages.lka.raw-material'); });
    Route::get('stabilita', function () { return view('rear-view.pages.lka.stabilita'); });
    Route::get('mikrobiologi', function () { return view('rear-view.pages.lka.mikrobiologi'); });
});

Route::group(['prefix' => 'rear-view/jadwal-stabilita'], function () {
    Route::get('ss-1', function () { return view('rear-view.pages.jadwal-stabilita.ss-1'); });
    Route::get('ss-2', function () { return view('rear-view.pages.jadwal-stabilita.ss-2'); });
});

Route::group(['prefix' => 'rear-view/other'], function () {
    Route::get('compliance', function () { return view('rear-view.pages.other.compliance'); });
    Route::get('instrument-andev', function() {return view ('rear-view.pages.other.instrument-andev');});
});

Route::prefix('users')->group(function () {
    Route::get('', [App\Http\Controllers\UsersController::class, 'users'])
        ->name('users');

    Route::delete('', [App\Http\Controllers\UsersController::class, 'user_delete'])
        ->name('user_delete');

    Route::post('', [App\Http\Controllers\UsersController::class, 'user_save'])
        ->name('users.save');
});

Route::prefix('account')->group(function () {
    Route::get('', [UsersController::class, 'myaccount'])->name('myaccount');
    Route::post('profile', [App\Http\Controllers\UsersController::class, 'myaccount_update'])->name('myaccount.update');
    Route::post('password', [App\Http\Controllers\UsersController::class, 'myaccount_update_password'])->name('myaccount.updatePassword');
});