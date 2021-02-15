<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    use HasFactory;
    protected $fillable= ['detmodalidad','slug'];

    public function getRouteKeyName() {
      return "slug";
    }
     //relacion uno amucho inversa
     public function planaquis() {
        return $this->hasMany('App\Models\Planaqui');
    } 
}