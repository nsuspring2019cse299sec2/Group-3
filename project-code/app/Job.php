<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function user(){
        return $this->belongsTo('\App\User','company_id');
    }

    public function category(){
        return $this->belongsTo('\App\Category');
    }

    public function hired(){
        return $this->belongsTo('\App\User','applicant_id');
    }
}
