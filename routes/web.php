<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotingController;
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

/*Route::get('/',[VotingController::class,'leader']);*/
Route::view('/','register');
Route::get('/vote',[VotingController::class,'voting']);
Route::post('/voting_',[VotingController::class,'vote']);
Route::view('/team','team');
Route::view('/register','register');
Route::post('/register',[VotingController::class,'register']);
Route::get('/leader',[VotingController::class,'leader']);
Route::get('/home',[VotingController::class,'leaderedit']);
Route::post('/edit',[VotingController::class,'edit']);
Route::get('/voteteam',[VotingController::class,'view']);
Route::post('/insert',[VotingController::class,'insert']);
Route::view('/adminerror','adminerror');
Route::get('/admin',function(){
    if(session()->has('username'))
    {
        return redirect('adminpanel');
    }else{return view('admin');}
});  
Route::post('/login',[VotingController::class,'login']);
Route::get('/adminpanel',[VotingController::class,'reporter']);
Route::get('/logout', function () {
        if(session()->has('username'))
        {
            session()->pull('username');
        }
        return redirect('admin');
    });
Route::view('/header','header');
Route::get('/count',[VotingController::class,'count']);
Route::view('/success','success');
Route::view('/footer','footer');
Route::view('/whatsapp','whatsapp');
Route::get('/generate-report-leader', [VotingController::class,'generateReport']);
Route::get('/genereate-report-vote',[VotingController::class,'generateReportvote']);
Route::get('/generate-report-register',[VotingController::class,'generateReportregister']);
Route::get('/generate-Report-event',[VotingController::class,'generateReportevent']);
Route::get('/evaluate',[VotingController::class,'editmark']);
Route::post('/up',[VotingController::class,'update']);
Route::view('/header','header');
Route::view('/marks','marks');
Route::get('/delete/{id}', [VotingController::class, 'delete']);
Route::get('/viewdatas/{id}', [VotingController::class, 'show']);
Route::post('/verify',[VotingController::class,'updatedata']);
Route::get('/initial',[VotingController::class,'initial']);