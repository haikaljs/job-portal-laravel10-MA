<?php

namespace App\Http\Controllers\Admin;

use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminJobCategoryController extends Controller
{
    public function index(){
        $job_categories = JobCategory::get();
        return view('admin.job_category', compact('job_categories'));
    }

    public function create(){
       
        return view('admin.job_category_create');
    }
}
