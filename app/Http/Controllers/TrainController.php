<?php

namespace App\Http\Controllers;
use App\Train;

use Illuminate\Http\Request;
class TrainController extends Controller
{
    public function index() {
        $trains = Train::where('date_departure', '>=', date('Y-m-d'))->where('date_departure', '<', date('Y-m-d', strtotime('tomorrow')))->get();
        return view('homepage', compact('trains'));
    }

    public function alltrain() {
        $allTrains = Train::all();
        return view('trains', compact('allTrains'));
    }

    public function info() {
        return view('info');
    }
}
