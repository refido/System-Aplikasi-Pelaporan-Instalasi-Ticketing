<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MyartisanController extends Controller
{
    public function clear_cache()
    {
        Artisan::call('optimize:clear');
        return 'Configuration cache cleared! <br> Configuration cached successfully!';
    }
}
