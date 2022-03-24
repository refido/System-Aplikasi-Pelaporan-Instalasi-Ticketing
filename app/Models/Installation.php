<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'number_of_technicians',
        'category_instansi',
        'technician_id',
        'date_instalation',
        'pic_name',
        'pic_phone',
        'status',
    ];
}
