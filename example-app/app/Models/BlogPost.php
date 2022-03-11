<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table='member';
    // public function getnameAttribute($value)
    // {
    //     return ucFirst($value);
    // }
    // public function getaddressAttribute($value)
    // {
    //     return $value.',India';
    // }
    // public function setnameAttribute($value)
    // {
    //     if(substr($value,0,3)=='Mr.'){
    //        $this->attributes['name']=$value;
    //     }
    //     else{
    //        $this->attributes['name']="Mr ". $value;
    //     }
    // }
    // public function setaddressAttribute($value)
    // {
    //     $this->attributes['address']=$value." UK";
    // }
    public function getCompany()
    {
        return $this->hasOne('App\Models\company');
    }
}
