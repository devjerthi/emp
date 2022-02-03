<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddDepartment extends Model
{
    protected $fillable =
    ([
        'title',
        'details'
    ]);

   use SoftDeletes;
   protected $dates = ['deleted_at'];
   

}
