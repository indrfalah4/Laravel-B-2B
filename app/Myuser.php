<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myuser extends Model
{
    //
    protected $table = 'contactuses';
    protected $primarykey = 'id';
    public $timestamps = false;
}
