<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('schedules.calendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apiLoadEvents()
    {
        $events = array();
        $agenda = [
            'allDay' => false,
            'start' => '2019-12-25 12:00:00',
            'end' => '2019-12-25',
            'title' => 'Hello World',
            'id' => '1',
            'url' => 'google.com'
        ];
        $events[] = $agenda;

        $agenda['allDay'] = false;
        $agenda['start'] = '2019-12-27 12:00:00';
        $agenda['end'] = '2019-12-27';
        $agenda['title'] = "Blah";
        $agenda['id'] = "2";
        $events[] = $agenda;

        echo json_encode($events);
        exit();
    }
}
