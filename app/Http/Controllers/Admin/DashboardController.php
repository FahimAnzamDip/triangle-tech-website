<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $title = "TTL - Dashboard";

        return view('admin.dashboard', [
            'title' => $title
        ]);
    }
}
