<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function account(){
        return $this->belongsTo('App\Models\Account');
    }

    public function getPhotoAttribute($val)
  {
      return ($val !== null) ? asset('/assets/' . $val) : "";
  }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }

    public function works()
    {
        return $this->hasMany('App\Models\Work');
    }

    public function notes()
    {
        return $this->hasMany('App\Models\Note')->orderByDesc('id');
    }








}
