<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable =['employer_id','title','salary'];
// protected $guarded = [];  would effectively make all fields able to be fillable

    public function employer()
    {
       return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
      return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
}
