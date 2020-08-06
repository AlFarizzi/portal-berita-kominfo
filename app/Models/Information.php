<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'information';
    protected $fillable = ['information'];

    public function infos() {
        return $this->hasMany(InformationList::class, 'information_id');
    }

}
