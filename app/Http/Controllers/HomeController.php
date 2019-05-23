<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;
use App\Models\TrainStation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $airport = Airport::all();
        $train_station = TrainStation::all();
        return view('index', compact('airport', 'train_station'));
    }

    public function schedule()
    {
        $now = date("Y-m-d h:i:s");
        $plane_schedule = \App\Models\PlaneSchedule::all()->where('boarding_time', ">=" ,$now);
        $train_schedule = \App\Models\TrainSchedule::all()->where('boarding_time', ">=" ,$now);
        return view('user/schedule', compact('plane_schedule', 'train_schedule'));
    }
}
