<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StupidData extends Model
{
    use HasFactory;

    protected $table = 'table_stupid_data';

    protected $fillable = [
        'id', 'name', 'email', 'phone', 'is_stupid'
    ];
}
