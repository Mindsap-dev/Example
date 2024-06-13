<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class shizz extends Model{
    use HasFactory;

    protected $table = 'table_stupid_data';

    protected $fillable =['name','email', 'phone', 'is_stupid'];
}
