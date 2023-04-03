<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class Calendar extends Controller
{
    public function index()
    {
        $daysInMonth = Carbon::now()->daysInMonth;
        $daysArray = array_fill(0, $daysInMonth, false);
        $daysName = ['Mon', 'Tues', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        return view('pages.calendar.main', [
            'days' => $daysArray,
            'daysName' => $daysName,
        ]);
    }
}
