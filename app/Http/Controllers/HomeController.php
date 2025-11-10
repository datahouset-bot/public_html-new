<?php

namespace App\Http\Controllers;

use auth;
use App\Models\amc;
use App\Models\todo;
use App\Models\Followup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $amcCount = Amc::count(); // Count all AMC records
        $dueAmcCount = Amc::where('payment_status', 'Unpaid')->count(); // Count due AMC records
        $pendingTask = todo::where('reminder_af1', '0')->count(); // Count due AMC records
    
        $currentDate = now()->toDateString();
       $todayFollowup= Followup::getRecordsWithHighestIdForEachLead()
       ->whereDate('followup_date', $currentDate)
       ->orderBy('followup_date')
       ->count();
$login_name=auth::user()->name;

        // Pass the counts to the view
        return view('home', compact('amcCount', 'dueAmcCount','pendingTask','todayFollowup','login_name'));    
    }
    
}
