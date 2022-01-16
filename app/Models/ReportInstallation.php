<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportInstallation extends Model
{
    protected $table = 'report_installations';
    protected $fillable = [
        'start_installation', 'start_training', 'completed_training',
        'completed_installation', 'component_id', 'status', 'jumlah_caller'
    ];
}
