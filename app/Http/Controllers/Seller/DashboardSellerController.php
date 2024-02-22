<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSellerController extends Controller
{
    function __construct()
    {
        $this->middleware('role:seller');
    }

    function indexDashboard()
    {
        $breadcrumb = generateBreadcrumb([
            '' => 'dashboard'
        ]);
        return view('seller.dashboard', [
            'breadcrumb' => $breadcrumb
        ]);
    }
}
