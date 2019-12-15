<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scammer extends Model
{
  protected $table ='scammers';
  protected $fillable =['name','phone','email','bank_name','bank_account','platform','product','link'];
}
