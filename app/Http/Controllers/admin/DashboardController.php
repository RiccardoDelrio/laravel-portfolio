<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $totalProjects = Project::count();
        $totalCategories = Category::count();

        return view('admin.dashboard', compact('user', 'totalProjects', 'totalCategories'));
    }
}
