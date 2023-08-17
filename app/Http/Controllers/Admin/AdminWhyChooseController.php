<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseItem;

class AdminWhyChooseController extends Controller
{
    public function index(){
        $why_choose_items = WhyChooseItem::get();
        return view('admin.why_choose_item', compact('why_choose_items'));
    }
}
