<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    protected $table = 'instances';
    protected $fillable = ['name', 'no_tlpn_pic','address','pic_name'];
}
