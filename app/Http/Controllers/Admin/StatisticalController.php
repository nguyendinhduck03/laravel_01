<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatisticalController extends Controller
{
    public function dailyStats() 
    {
        return view('admins.statistics.statisticsByDay');
    }
}
