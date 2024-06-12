<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class shizz extends Model{
    protected $table = 'table_stupid_data';

    protected $fillable =['name','email', 'phone', 'is_stupid'];
}
