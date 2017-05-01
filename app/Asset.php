<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //資產
    protected $table = 'assets';
    protected $fillable = [
        'id',
        'name',
        'category',
        'date',
        'cost',
        'staues',
        'keeper',
        'lendable',
        'location',
        'remark',
        'vendor',
        'warranty',
    ];

}
