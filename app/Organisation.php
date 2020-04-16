<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\MultitenantableTrait;

class Organisation extends Model
{
    use MultitenantableTrait, Softdeletes;
}
