<?php
use App\Http\Middleware\IsAdmin;

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

//Route::get('/', function () {
   // return view('welcome');
//});
Auth::routes();

Route::group(['middleware' => ['unique','auth','web']], function () {
    Route::get('/give_privilege', "StudentController@give_privilege");
    Route::post('/pass_privilege', "StudentController@pass_privilege");
});

Route::group(['middleware' => ['auth','web']], function () {
    Route::get('/user-info', "StudentController@user_info");
    Route::post('/user-info-change', "StudentController@user_info_change");
    Route::post('/change_password', "StudentController@change_password");
    
});
Route::group(['middleware' => ['admin','auth','web']], function () {
  
   


Route::post('/edit_or_delete_app', "StudentController@edit_or_delete_app");
Route::get('/application_type', "StudentController@application_type");
Route::post('/application_type_creator', "StudentController@application_type_creator");
Route::get('/testchoice', "StudentController@testchoice");


Route::post('/FieldGet', "StudentController@FieldGet");

Route::get('/FieldPage1', "StudentController@FieldPage1");
Route::post('/FieldAdder1', "StudentController@FieldAdder1");
Route::post('/edit_or_delete_application_fields', "StudentController@edit_or_delete_application_fields");

Route::get('/edit-application', "StudentController@editapplication");
Route::post('/ajaxresponse', "StudentController@ajaxresponse");
Route::post('/Delete_all', "StudentController@Delete_all");

Route::post('Upload-Document', "StudentController@UploadDocument");
Route::post('/edit_or_delete_info_fields', "StudentController@edit_or_delete_info_fields");
Route::get('/edit-info', "StudentController@editinfo");
Route::get('/InfoFieldPage', "StudentController@InfoFieldPage");
Route::post('/InfoFieldAdder', "StudentController@InfoFieldAdder");
Route::post('/infoajaxresponse', "StudentController@infoajaxresponse");
Route::post('/infoDelete_all', "StudentController@infoDelete_all");


Route::post('/edit_or_delete_submit_fields', "StudentController@edit_or_delete_submit_fields");
Route::get('/edit-submit', "StudentController@editsubmit");
Route::get('/SubmitFieldPage', "StudentController@SubmitFieldPage");
Route::post('/SubmitFieldAdder', "StudentController@SubmitFieldAdder");
Route::post('/submitajaxresponse', "StudentController@submitajaxresponse");
Route::post('/submitDelete_all', "StudentController@submitDelete_all");


Route::get('/pagination2', "StudentController@Pagination2");
Route::get('/test', "StudentController@test");
Route::get('/kartela2', "StudentController@Kartela2");
Route::post('CreateZip2', "StudentController@CreateZip2");
Route::post('finalization', "StudentController@Finalization");
Route::post('mailto', "StudentController@mailto");


    //
});
Route::group(['middleware'=> ['user','auth','web']], function(){


    Route::post('student2', "StudentController@storeStudent2");
   
    Route::get('/profile', "StudentController@GDPR");
Route::get('/choose_application_type', "StudentController@choose_application_type");
Route::get('/student_choice', "StudentController@student_choice");
Route::get('/Submission2', "StudentController@Submission2");
Route::get('/statement', "ProfileController@statement");
Route::get('/application4', "StudentController@application4");


//Route::get('/testing', "StudentController@testing");
//Route::post('StudentPersonalInfo', "StudentController@StudentPersonalInfo");

//Route::get('/application2', "ProfileController@application2");
//Route::get('/application3', "StudentController@StudentInputsCreator");
//Route::get('/application', "ProfileController@application");
Route::get('/', "StudentController@index");

//Route::get('/FieldPage', "StudentController@FieldPage");
//Route::post('/FieldAdder', "StudentController@FieldAdder");

//Route::post('/FieldRemover1', "StudentController@FieldRemover1");



//Route::post('/savetodatabase', "StudentController@savetodatabase");

//Route::post('/FieldRemover', "StudentController@FieldRemover");

//Route::get('/Submission', "ProfileController@Submission");
//Route::get('/Submission', "StudentController@Submission");
//Route::post('student', "StudentController@storeStudent");
//Route::get('index', "StudentController@index");
//Route::get('store', "StudentController@store");
//Route::post('dbquery', "StudentController@db");
/*Route::get('/test', function(){
    $image = DB::table('students')->select('document1')->where('id','=','21')->value('document1');
   
    return view('/test')->with('image', $image);
    
    
});*/
//Route::get('/kartela', "StudentController@Kartela");
//Route::get('/pagination', "StudentController@Pagination");

//Route::post('CreateZip', "StudentController@CreateZip");
//Route::get('/FinishLine', "StudentController@finish");

//Route::post('idfinalization', "StudentController@idFinalization");
/*Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('mail', $data, function ($message) {

        $message->from('yourEmail@domain.com', 'Learning Laravel');

        $message->to('yourEmail@domain.com')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";

});*/


//Route::get('/home', 'HomeController@index')->name('home');

   // Route::get('/choose_application_type', "StudentController@choose_application_type");
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

