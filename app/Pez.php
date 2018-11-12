<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pez extends Model
{
    public function animals(){
        return $this->belongsTo(Animals::class);
    }
}
