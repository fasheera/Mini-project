<?php

namespace App\Http\Controllers;

use App\booking;
use App\user;
use Illuminate\Http\Request;
use Auth;
use View;
use \DB;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Mybookings= booking ::all()->toArray();
        return view('booking');
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
        $booking=new booking;
        
        $users = User::find(Auth::user()->id);
        $name = $users['name'];

        $booking->name=$request->name;
        $booking->position=$request->position;
        $booking->slot_no=$request->slot_no;
        $booking->date=$request->daytime;
        $booking->time=$request->daytime;
        $booking->endtime=$request->endtime;
        $booking->user_id=$request->user_id;
        $booking->updated_by=$name;
        $booking->status="booked";
        $booking->faculty=$request->faculty;
        $booking->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
      $id = Auth::user()->id;
      $users = User::find(Auth::user()->id);
      $user_role = $users['Position'];
      if($user_role == "admin" || $user_role="security"){
        $Mybookings=Booking::all();
        return view('mybooking',['Mybooking'=>$Mybookings]);
      }
      else{
        $Mybookings=Booking::all()->where('user_id',$id);
        return view('mybooking',['Mybooking'=>$Mybookings]);
      }
      
    }
    public function showCancled(booking $booking)
    {
      $id = Auth::user()->id;
      $users = User::find(Auth::user()->id);
      $user_role = $users['Position'];
      
      if($user_role == "admin" || $user_role=="security"){
        $Mybookings=Booking::all();
        return view('cancledbooking',['Mybooking'=>$Mybookings]);
      }
      else{
       // $Mybookings=Booking::all()->where('user_id',$id);
        return view('home');
      }
      
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
       // $BookingID = $booking->input('BookingID');
      //  DB::table('booking')->where('id', '==',$BookingID )->delete();
      //  return view('home');
    }
    public function deleteRow(Request $request)
    {
        //
      $id = Auth::user()->id;
      $users = User::find(Auth::user()->id);
      $name = $users['name'];
       $BookingID = $request->input('BookingID');
        //DB::table('bookings')->where('id', '==',$BookingID )->delete();
       // Booking::where('id',$BookingID)->delete(); 
       DB::update('update bookings set updated_by = ?,status=?,updated_at=? where id = ?',[$name,"cancled",NOW(),$BookingID]);
    //    $sql ="Update bookings set status ='cancled', updatedby ="$name" WHERE id == ";
        // $MyBooking = DB::select($sql);   

              
        $id = Auth::user()->id;
        $position = Auth::user();
         if($id == "1" || $position == "security" ){
            $Mybookings=Booking::all();
            return view('mybooking',['Mybooking'=>$Mybookings]);
        }
        else{
            $Mybookings=Booking::all()->where('user_id',$id);
            return view('mybooking',['Mybooking'=>$Mybookings]);
        }
    }
    public function datepic(Request $request){
        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $dateTime = $request->input('datetime'); 
        $endtime = $request->input('endtime'); 
       // $endtime ='17:55:00' ;   
        //$date = "2020-08-19";
       // $time="";    
      // $datetime = "28-1-2011 14:32:55";
       $date = date('Y-m-d', strtotime($dateTime));
       $time = date('H:i:s', strtotime($dateTime));
        //$MyBooking = Booking::all()->where('date', $date)->where('time',$time);   
        /*$MyBooking = Booking::all()->where("date",$date)
                                ->Where(function ($query) {
                                        return $query->where(function($q){
                                                return $q->where('time','>=',$time)
                                                ->where('endtime','<=',$time);
                                            })
                                            ->whereor(function($y){
                                                return $y->where('time','>=',$endtime)
                                                ->where('endtime','<=',$endtime);
                                            });
                                    })
                                    ->get();*/
        $sql ="SELECT * FROM `bookings` WHERE `date` = '$date' AND ((`time` <= '$time' AND `endtime` > '$time') OR (`time` <= '$endtime' AND `endtime` > '$endtime') OR (`time` > '$time' AND `endtime` < '$endtime') )";
        $MyBooking = DB::select($sql);     
        //return view('booking',['Mybooking'=>$Mybookings]);
        return view('booking',['MyBooking'=>$MyBooking])->with('dateTime',$dateTime)->with("endtime",$endtime)->with('ID',$id)->with('name',$name);
    }
}
