<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    //
    protected $table = 'supplies';
    protected $fillable = [
        'name',
        'quantity',
    ];


    public function receive()
    {
        return $this->belongsTo(Receive::class);
    }
}
