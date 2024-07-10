<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index($id)
    {
        $today_time = Carbon::now();
        $trains = Train::where('departure_time', '>=', $today_time)->where('id', $id)->get();
        return view('.Pages/trains', compact('trains'));
    }
}
