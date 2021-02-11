<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /*protected $fillable = [
        'name', 'email', 'designation','ph_no','address','dob','avatar',  //Assign with table colomns with model
    ];*/

    public function inquiry(){
        return $this->hasOne('App\Inquiry');
    }
}
