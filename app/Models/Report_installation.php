<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_installation extends Model
{
    use HasFactory;
    protected $fillable = [
        'installation_id',
        'start_installation',
        'start_training	',
        'complete_training',
        'completed_installation',
        'condition',
        'problem',
        'video',
        'status',
        'anydesk_id',
    ];
}
