<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings= Booking::all();
        return view('backend.booking.bookinglist',compact('bookings'));
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
        // dd($request);
        $request->validate([
        'cid'=>'required',
        'schid'=>'required',
        'seatamout'=>'required',
        'seatno'=>'required',
        'dep'=>'required',

       ]);

       // insert data
       // $item->column name=$request->form name

       $booking=new Booking;
       $booking->customer_id=$request->cid;
       $booking->schedule_id=$request->schid;
       $booking->seat_amout=$request->seatamout;
       $booking->seat_no=$request->seatno;
       $booking->dapature_date=$request->dep;
       $booking->save();
       return redirect()->route('frontend');

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
}
