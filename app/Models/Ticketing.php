<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketing extends Model
{
    protected $table = 'ticketings';
    protected $fillable = ['date_created','date_completed','no_ticketing','problem','solving','status'];
}
