<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['report'];
    public function reports() {
        return $this->hasMany(ReportList::class, 'report_id');
    }
}
