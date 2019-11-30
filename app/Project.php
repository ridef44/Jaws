<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


    class Project extends Model
{

    use SoftDeletes;
    public static $rules = [
        'name' => 'required',
        'start' => 'date'
    ];  

    public static $messages = [
        'name.required' => 'Por favor ingrese un nombre para el proyecto',
        'start.date' => 'Formato de fecha incorrecto'
    ];  

     protected $fillable = [
        'name', 'description', 'start'
    ];

//relaciones
public function users()
    {
        return $this->belongsToMany('App\User');
    }



//accesors
    public function categories()
    {

        return $this->hasMany('App\Category');
    }

     public function levels()
    {

        return $this->hasMany('App\Level');
    }

    public function getFirstLevelIdAttribute()
    {
        return $this->levels->first()->id;
    }


}


