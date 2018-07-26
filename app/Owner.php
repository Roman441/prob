<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['name', 'age', 'buiznes'];
    public function transport(){
        return $this->hasMany(Transport::class, 'transport_id');
    }

}
