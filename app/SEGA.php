<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SEGA extends Model
{
    //

    use SoftDeletes;
    
    protected $table = 'sega';

    protected $primaryKey = 'id';
}
