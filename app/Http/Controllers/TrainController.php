<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_time', '>=', Carbon::today())->get();
        if (empty($trains)) {
            abort(404);
        }
        return view("home", compact("trains"));
    }
}
