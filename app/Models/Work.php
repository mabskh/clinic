<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $guarded = [];

    public function patient(){
        return $this->belongsTo('App\Models\Patient');
    }

    public function workCategory(){
        return $this->belongsTo(AppStatic::class,'work_cat');
    }

}
