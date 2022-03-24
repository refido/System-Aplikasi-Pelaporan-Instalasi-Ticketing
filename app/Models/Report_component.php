<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_component extends Model
{
    use HasFactory;
    protected $fillable = [
        'report_id',
        'component_id',
    ];
}
