<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\shizz;
use App\Http\Controllers\StupidDataController;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job',['job'=>$job]);
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
