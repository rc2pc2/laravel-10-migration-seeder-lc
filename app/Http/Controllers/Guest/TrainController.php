<?php

namespace App\Http\Controllers\Guest;

use App\Helpers\Reader;
use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //

    public function index(){
        $trains = Train::all();
        return view('guest.train.index', compact('trains'));
    }
}
