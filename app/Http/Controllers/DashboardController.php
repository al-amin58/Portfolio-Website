<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $count = Visitor::count();
        return view('Backend.index', ['count' => $count]);
    }
}
