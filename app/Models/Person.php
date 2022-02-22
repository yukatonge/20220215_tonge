<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'age'];

    public static $rules = array(
        'name' => 'requred',
        'age' => 'integer|min:0|max:150'
    );
    public function getDetail()
    {
        $txt ='ID:'.$this->id . ' ' . $this->name . '(' . $this->age . '才'.')';
        return $txt;
    }
    public function people(){
        return $this->hasOne('App\Models\person');
    }
    public function books(){
        return $this->hasMany('App\Models\person');
    }
}
