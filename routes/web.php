<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $jobs = Job::all();

    // The line below is the same as dd($jobs[0]["title"]);
    dd($jobs[0]->title);
//    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
            'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});





