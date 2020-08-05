<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Neww extends Model
{
    protected $table = 'news';
    protected $fillable = ['new'];

    public function news() {
        return $this->hasMany(NewList::class, 'category_id');
    }

}
