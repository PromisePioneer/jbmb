<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function indexDashboard()
    {
        $breadcrumb = generateBreadcrumb([
            '' => 'dashboard'
        ]);
        return view('admin.dashboard', [
            'breadcrumb' => $breadcrumb
        ]);
    }
}
