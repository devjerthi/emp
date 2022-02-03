<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AddReport extends Model
{
    protected $fillable = 

    [   
        'employee',
        'month',
        'year'

    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
