<?php

namespace App\Models;


use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [
                "id" => 1,
                'title' => 'Director',
                'salary'=>  '$90,000'

            ],
            [
                "id"=> 2,
                'title' => 'Programmer',
                'salary'=>  '$100,000',
            ],
            [
                "id"=> 3,
                'title' => 'Teacher',
                'salary'=>  '$70,000',

            ]
        ];
    }
    public static function find(int $id): array
    {
        return Arr::first(static::all(), fn($job)=> $job['id']==$id);

    }
}
