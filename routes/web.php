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

Route::get('/', function () {
    return view('welcome');
});


*/




Route::get('/','App\Http\Controllers\JobsController@showAll')->name('Procházet inzeráty');
//Route::get('/jobdetail/{id}','App\Http\Controllers\JobsController@showDetail')->name('Zobrazit detail');
Route::get('/contact/{id}','App\Http\Controllers\JobsController@showDetailContact')->name('Kontaktovat');
Route::get('/new-offer','App\Http\Controllers\JobsController@newOffer')->name('Nový inzerát');
Route::get('/new-offer-done','App\Http\Controllers\JobsController@newOfferDone')->name('Nový inzerát uloženo');
Route::post('/new-offer','App\Http\Controllers\JobsController@store')->name('Uložit inzerát');
Route::post('/send-message','App\Http\Controllers\JobsController@messageSend')->name('Odeslat zprávu');
Route::get('/looking4job','App\Http\Controllers\JobsController@newOffer')->name('Hledám práci');
Route::get('/help-uajobscz','App\Http\Controllers\JobsController@heplUaJobs')->name('Pomoc UAjobs.cz');
Route::get('/kontakt','App\Http\Controllers\JobsController@contact')->name('Kontakt UAjobs.cz');
Route::get('/help-ua','App\Http\Controllers\JobsController@heplUa')->name('Další pomoc UA');
Route::get('/view-responses/{id}/{hash}','App\Http\Controllers\JobsController@showResponses')->name('Zobrazit odpovědi');



Route::get('/dashboard', function () {
    $jobsTotal = DB::table('jobOffers')->orderBy('id','desc')->count();;
    $jobs = DB::table('jobOffers')->orderBy('id','desc')->paginate(100);

    return view('dashboard',['jobs'=>$jobs,"totalCount"=>$jobsTotal]);
})->middleware(['auth'])->name('dashboard');


Route::get('/dashboard/edit/{id}','App\Http\Controllers\JobsController@DashboardEdit')->name('Upravit práci')->middleware(['auth']);

/*
Route::get('/dashboard/edit/{id}', function (Request $req) {
    $jobsTotal = DB::table('jobOffers')->orderBy('id','desc')->count();;
    $categories = DB::table('jobCategories')->orderBy('categoryName','asc')->get();
    $jobDetail = DB::table('jobOffers')->where('id',$req->id)->first();

    return view('dashboardedit',['jobs'=>$jobDetail,"totalCount"=>$jobsTotal,'categories'=>$categories]);
})->middleware(['auth'])->name('Upravit práci');

*/


require __DIR__.'/auth.php';
