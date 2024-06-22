<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\shizz;
use App\Http\Controllers\StupidDataController;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    $jobs=Job::with('employer')->paginate(5);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show',['job'=>$job]);
});

Route::post('/jobs', function(){
    Job::create ([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id'=>1
    ]);
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact', [
        'jobs' => shizz::all()
    ]);
});
Route::get('/contacts/{id}', function ($id) {
    $job = shizz::find($id);
    return view('contacts',['job'=>$job]);
});
Route::get('/stupid-data', function () {
    return view('stupid-data');
});
Route::get('/api/stupid-data', [StupidDataController::class, 'index']);

