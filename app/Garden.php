<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garden extends Model
{
    protected $fillable=[
   'title',
   'subtitle',
   'description',
   'coverImg',
   'category',
    ];
}
