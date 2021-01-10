<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Account extends Model

{

    protected $fillable = [
        'link' , 'email' , 'mobile' , 'user_id' , 'job_title' , 'description', 'created_at' , 'updated_at' , 'full_name',
        'national_id', 'birth_place', 'birth_day', 'mother_name', 'work_place', 'current_place' , 'photo' ,

    ];

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  public function patients()
  {
      return $this->hasMany('App\Models\Patient');
  }


  public function getPhotoAttribute($val)
  {
      return ($val !== null) ? asset('/public/assets/' . $val) : "";

  }

}
