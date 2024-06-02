<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
            'title' => 'Director',
            'salary'=>  '$90,000'

        ],
        [
            'title' => 'Programmer',
            'salary'=>  '$100,000',
        ],
            [
                'title' => 'Teacher',
                'salary'=>  '$70,000',

            ]
        ]
    ]);
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/contact', function () {
    return view('Contact');
});
