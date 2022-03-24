<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketing extends Model
{
    use HasFactory;
    protected $fillable = [
        'instance_name',
        'address',
        'date_created',
        'date_complete',
        'no_ticketing',
        'component_id',
        'problem',
        'status',
    ];
}
