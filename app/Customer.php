<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const CREATED_AT='created_date';
    const UPDATED_AT='updated_date';

    public function fullName(){
        return $this->first_name.''.$this->last_name;
    }
}
