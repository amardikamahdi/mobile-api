<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function analytics()
    {
        return view('dashboard.analytics');
    }

    public function finance()
    {
        return view('dashboard.finance');
    }
}
