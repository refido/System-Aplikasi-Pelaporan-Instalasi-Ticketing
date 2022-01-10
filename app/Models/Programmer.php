<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    protected $table = 'programmers';
    protected $fillable = ['name', 'no_tlpn','status'];
}
