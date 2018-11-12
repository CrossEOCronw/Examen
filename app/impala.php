<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class impala extends Model
{
    public function animals(){
        return $this->belongsTo(Animals::class);
    }
}
