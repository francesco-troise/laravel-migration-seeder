<?php

namespace App\Http\Controllers\Trains;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Train;

class TrainController extends Controller
{
    public function Index(){
        $trains = Train::all();
        return view('ShowTrains', [
            'trains' => $trains
        ]);
    }

}
