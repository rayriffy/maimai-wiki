<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ORIG extends Model
{
    //

    use SoftDeletes;

    protected $table = 'orig';

    protected $primaryKey = 'id';
}
