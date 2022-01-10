<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallationSchedule extends Model
{
    protected $table = 'installation_schedules';
    protected $fillable = ['date_instalation','status'];
}
