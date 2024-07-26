<?php

use App\Models\StupidData;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\shizz;
use App\Http\Controllers\StupidDataController;

Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {
    $jobs=Job::with('employer')->latest()->paginate(10);
    return view('jobs.index', compact('jobs'));
    //Remember the compact variable - shorthand for ['jobs' => $jobs]
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show',['job'=>$job]);
});

// Store
Route::post('/jobs', function(){
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    Job::create ([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id'=>1
    ]);
    return redirect('/jobs');
});

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit',['job'=>$job]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    //authorize (on hold...)
    $job = Job::findOrFail($id);
    $job->title=request('title');
    $job->salary=request('salary');
    $job->save();
    return redirect('/jobs/' . $job->id);
});

//Delete
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact', [
        'jobs' => shizz::paginate(10)
    ]);
});
//Route::get('/contact', function () {
//    return view('contact', [
//        'mikes' => shizz::paginate(10)
//    ]);
//}); This is an example to show me the logic of the sentence syntax

Route::get('/contacts/{id}', function ($id) {
    $job = shizz::find($id);
    return view('contacts',['job'=>$job]);
});

Route::get('/stupid-data', function () {
    return view('stupid-data');
});

Route::get('/api/stupid-data', [StupidDataController::class, 'index']);

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
