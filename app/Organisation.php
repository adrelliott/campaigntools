<?php

namespace App;

use App\Traits\MultitenantableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use MultitenantableTrait, SoftDeletes;
}
