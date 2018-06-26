<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GAME extends Model
{
    //

    use SoftDeletes;

    protected $table = 'game';

    protected $primaryKey = 'id';
}
