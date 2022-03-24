<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_programmer',
        'name',
        'no_tlpn',
        'status',
    ];
}
