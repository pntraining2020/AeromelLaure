<?php

namespace App\Http\Controllers;
use DateTime;
use App\persons;
use App\breaks;
use App\timeinouts;
use Carbon\Carbon;

use Illuminate\Http\Request;

class clockController extends Controller
{
    function togetTime(){
        $persons = persons::select('created_at')->get();
        // $a = Carbon::createFromFormat('Y-m-d H:i:s', $persons)->format('H:i:s');
        // date("H:i","1359780799")
        $time = ($persons[0]->created_at->format('H:i'));
        $mytime = Carbon::now();
        dd($mytime);
        // $a = new DateTime();
        // dd($a->format('H:i:s'));
        return view('viewClock', compact('time'));
    }

    function clockIn(Request $request){
        $data = $request->all();
        $person = new persons($data);
        $person->save();
        return $this->togetTime();
    }
}
