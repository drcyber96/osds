<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reportscam extends Model
{
    protected $table ='reportscam';
    protected $fillable =['name','phone','email','bank_name','bank_account','platform','product','image'];
}
