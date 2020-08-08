<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_Information extends Model
{
    protected $fillable = ['information_id', 'sub_information'];

    public function infos() {
        return $this->hasMany(InformationList::class, 'sub_information_id');
    }
}
