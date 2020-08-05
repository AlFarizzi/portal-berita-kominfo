<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewList extends Model
{
    protected $fillable = ['category_id','title','body','thumbnail','slug'];

    public function new() {
        return $this->belongsTo(Neww::class, 'category_id');
    }
}
