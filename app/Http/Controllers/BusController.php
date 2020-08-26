<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\Operator;


class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses= Bus::all();
        return view('backend.bus.buslist',compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operators=Operator::all();
       return view('backend.bus.addbus',compact('operators'));
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
        'operator_id'=>'required',
        'total_seats'=>'required',
        'description'=>'required',

        
       ]);

       // insert data
       // $item->column name=$request->form name

       $bus=new Bus;
       $bus->operator_id=$request->operator_id;
       $bus->total_seats=$request->total_seats;
       $bus->description=$request->description;

   
       $bus->save();

       return redirect()->route('buses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus=Bus::find($id);
        $operators=Operator::all();
        return view('backend.bus.busview',compact('bus','operators'));
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
        
        $request->validate([
        
        'operator_id'=>'required',
        
        'total_seats'=>'required',
        'description'=>'required',

       
       ]);

        //if include file,upload

       

        //data update
       $bus=Bus::find($id);
       $bus->operator_id=$request->operator_id;
       $bus->total_seats=$request->total_seats;
       $bus->description=$request->description;
       
       $bus->save();
        //redirect
       return redirect()->route('buses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus=Bus::find($id);
        $bus->delete();
        //redirect
        return redirect()->route('buses.index');
    }
}
