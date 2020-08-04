<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewList extends Model
{
    protected $fillable = ['category_id','title','body','thumbnail','user_id'];
}
