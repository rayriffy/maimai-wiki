<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TOHO extends Model
{
    //

    use SoftDeletes;
    
    protected $table = 'toho';

    protected $primaryKey = 'id';
}
