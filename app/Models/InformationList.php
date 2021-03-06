<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationList extends Model
{
    protected $fillable = ['information_id','sub_information_id', 'title', 'body', 'thumbnail','file','slug'];

    public function info() {
        return $this->belongsTo(Information::class, 'information_id');
    }

    public function sub() {
        return $this->hasOne(Sub_Information::class, 'sub_information_id');
    }

}
