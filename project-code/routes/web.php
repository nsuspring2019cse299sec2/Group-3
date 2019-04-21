<?php

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
Route::get('index.php', function () {
    return view('welcome');
});

Route::get('search',function(){
    return view('search-result');
});
Route::post('search', 'JobController@search');
Route::group(['middleware' => ['auth']], function () {
    Route::get('jobs', function () {
        $jobs = \App\Job::where('status', 1)->paginate();
        return view('jobs',compact('jobs'));
    });
    Route::get('job/{id}', function ($id) {
        $job = \App\Job::where('id', $id)->where('status', 1)->first();
        $similar = \App\Job::where('category_id', $job->category_id)->where('status', 1)->get();
        return view('job', compact('job', 'similar'));
    });
    Route::get('job', function () {
        $categories = \App\Category::all();
        return view('create-job', compact('categories'));
    });
    Route::post('job', 'JobController@store');
    Route::get('hired',function(){
        $jobs = \App\Job::where('company_id', \Auth::user()->id)->get();
        $users = \App\Job::where('company_id', \Auth::user()->id)->where('applicant_id', 1)->pluck('applicant_id')->toArray();
        $hired = \App\User::whereIn('id', $users)->get();
        return view('hired',compact('jobs','hired'));
    });
});

Route::group(['middleware' => ['auth-jobseeker']], function () {
    Route::get('apply-job/{id}', 'ApplicationController@create');
    Route::post('apply-job','ApplicationController@store');
});

Route::group(['middleware' => ['auth-admin']], function () {
    Route::get('admin/dashboard', function () {
        $users = \App\User::paginate(5,["*"],'user_page');
        $jobs = \App\Job::with('category')->paginate(5,["*"],'job_page');
        $applications = \App\Application::paginate(5,["*"],'application_page');
        $categories = \App\Category::paginate(5,["*"],'categories_page');
        return view('dashboard',compact('users','jobs','applications','categories'));
    });
    Route::post('create-category', 'CategoryController@store');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
