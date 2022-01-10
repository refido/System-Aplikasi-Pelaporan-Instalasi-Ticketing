<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportInstallation extends Model
{
    protected $table = 'report_installations';
    protected $fillable = ['start_instllation', 'stop_installation','completed_installation','problem','condition','anydesk_id'];
}
