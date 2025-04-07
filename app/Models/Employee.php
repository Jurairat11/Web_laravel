<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = [
        'id',
        'name',
        'surname',
        'phone',
        'address',
        'email',
        'department',
        'position',
    ];
}
