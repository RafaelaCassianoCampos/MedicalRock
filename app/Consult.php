<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    //
    protected $table = 'consults';

    public function Consults(){
        return $this->belongsToMany(Consult::class);
    }
}
