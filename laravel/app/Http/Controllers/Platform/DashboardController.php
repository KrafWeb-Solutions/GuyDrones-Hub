<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display the Platform Dashboard.
     */
    public function index()
    {
        $stats = [
            'companies' => Company::count(),
            'users' => User::count(),
            'employees' => User::count(), // Temporary
            'plans' => 0, // Temporary
            'system_status' => 'Online',
        ];

        $recentCompanies = Company::latest()
            ->take(5)
            ->get();

        return view('platform.dashboard', compact(
            'stats',
            'recentCompanies'
        ));
    }
}