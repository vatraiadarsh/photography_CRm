<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{   
    protected $table="project_types";

    const CREATED_AT='created_date';
    const UPDATED_AT='updated_date';


    //auta project ma dharai projects hunxa so 

    public function projects(){
        return $this->hasMany('App\Project');
        //has many project hunxa vanako
    }

}
