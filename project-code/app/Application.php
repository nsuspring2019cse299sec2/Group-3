<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function applicant(){
        return $this->belongsTo('\App\User','applicant_id');
    }
}
