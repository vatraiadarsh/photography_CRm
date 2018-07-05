<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//NOTE:: table haru sabai model ma hunxa

class Project extends Model
{
    protected $table='projects';

    //public $timestamps=false;
    const CREATED_AT='created_date';
    const UPDATED_AT='updated_date';

    public function projectType(){
        return $this->belongsTo('App\ProjectType','project_type_id','id');
    }                                           // |yo foreign key ho| |ani id saga maping garna table ko|

    // yo project customer la dako ho so

    public function customer(){
        return $this->belongsTo('App\Customer','customer_id','id');
    }

}


