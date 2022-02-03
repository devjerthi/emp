<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class AddEmploye extends Model
{
    protected $fillable=
       ([

        'department',
        'firstname',
        'lastname',
        'email',
        'phoneno',
        'address',
        'amount',
        'password'
    ]);

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
