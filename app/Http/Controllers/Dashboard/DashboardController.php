<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $garduCount = DB::table('data_aset_gardu')->count();
        $jtrCount = DB::table('data_aset_jtr')->count();
        $jtmCount = DB::table('data_aset_jtm')->count();


        return view('dashboard.home',compact('garduCount','jtrCount','jtmCount'));
    }
}
