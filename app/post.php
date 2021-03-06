<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable=['title','content','status'];

    public function comment(){
      return $this->hasMany("App\Comment");
    }
}
