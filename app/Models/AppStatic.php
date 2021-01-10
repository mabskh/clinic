<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppStatic extends Model
{
    public $table = 'app_statics';
    protected $guarded = [];


    public function parent()
    {
        return $this->belongsTo(self::class,'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class,'parent_id');
    }

    public function allParents()
    {
        return $this->parent()->with('allParents');
    }

    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }


}
