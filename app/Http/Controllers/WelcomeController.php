<?php

namespace App\Http\Controllers;

use App\welcome;
use App\Booking;
use Illuminate\Http\Request;
use View;
use \DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("welcome");
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
     * @param  \App\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $dateTime = $request->input('datetime');    
       /* $date = "2020-08-19";
        $time="";    
       $datetime = "28-1-2011 14:32:55";*/
        $date = date('Y-m-d', strtotime($dateTime));
        $time = date('H:i:s', strtotime($dateTime));
        $endtime =  $request->input('Endtime');
      /* $MyBooking = Booking::all()
            ->where('date', $date)
            ->Where(function ($query) {
                $query->where('time', '<=', $time)
                      ->where('endTime', '>=', $time);
            })
            ->orWhere(function ($query) {
                $query->where('time', '<=', $endtime)
                      ->where('endtime', '>=', $endtime);
            })->get();*/
            $sql ="SELECT * FROM `bookings` WHERE `date` = '$date' AND ((`time` <= '$time' AND `endtime` > '$time') OR (`time` <= '$endtime' AND `endtime` > '$endtime') OR (`time` > '$time' AND `endtime` < '$endtime') )";
            $MyBooking = DB::select($sql); 
       // $MyBooking = Booking::all()->where('date', $date)->where('time',$time);        
        //return view('booking',['Mybooking'=>$Mybookings]);
        return view('main',['MyBooking'=>$MyBooking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(welcome $welcome)
    {
        //
    }
}
