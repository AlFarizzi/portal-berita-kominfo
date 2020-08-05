<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportList extends Model
{
    protected $fillable = ['report_id', 'title', 'slug','body', 'thumbnail','file'];
    public function report() {
        return $this->belongsTo(Report::class, 'report_id');
    }
}
