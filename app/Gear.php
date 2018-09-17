<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    protected $fillable = ['name','type'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'gear';
}
