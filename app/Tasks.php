<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = [
        'startDate',
        'endDate',
        'itemName',
        'category',
        'priority',
        'comments'
    ];
}
