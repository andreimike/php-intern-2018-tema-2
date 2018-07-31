<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //table name
    protected $table = 'company';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    protected $fillable = array('name', 'description');

    public function employee()
    {
        return $this->hasOne('App\Models\Employee');
    }

}
