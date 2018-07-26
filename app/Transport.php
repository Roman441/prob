<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = ['name', 'mark', 'year_of_issue', 'owner_id'];
    public function owner(){
        return $this->belongsTo(Owner::class, 'owner_id');
    }

}
