<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = "logs_reading";
    protected $fillable = ['std_id', 'browser'];
}
