<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technician extends Model
{
    protected $table = 'technicians';
    protected $fillable = ['name', 'no_tlpn','status'];
}
