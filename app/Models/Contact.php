<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function patient(){
        return $this->belongsTo('App\Models\Patient');
    }


}
