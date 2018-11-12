<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $table='animals';
    public function pez(){
        return $this->hasMany(Pez::class);
    }
    public function Gato() {
        return $this->hasMany(Gato::class);
    }
    public function Ciervo(){
        return $this->hasMany(Ciervo::class);
    }
    public function impala(){
        return $this->hasMany(impala::class);
    }
    public function orangutan(){
        return $this->hasMany(Orangutan::class);
    }
    public function dingo(){
        return $this->hasMany(Dingo::class);
    }

}
