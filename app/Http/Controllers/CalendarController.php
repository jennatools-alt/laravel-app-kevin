<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class CalendarController extends Controller
{

    public function index()
    {
        $events = Calendar::select('title', 'starttime AS start', 'endtime AS end')->get();
        return json_encode( compact('events')['events'] );
    }


    public function create()
    {
        return view('events.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'title' => 'required',
             'starttime' => 'required',
             'endtime' => 'required',
        ]);

        $calendar = Calendar::create([ 
             'title' => $request->title, 
             'starttime' => date($request->starttime),
             'endtime' => date($request->endtime), 
        ]);

        return redirect('/calendar');
    }

    public function show($id)
    {
        $calendar= Calendar::find($id); 
        return view('calendars.show',compact('calendars'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
