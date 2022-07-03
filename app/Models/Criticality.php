<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criticality extends Model
{
    protected $table = "criticalities";
    protected $fillable = ['name'];
}
