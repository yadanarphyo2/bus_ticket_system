<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Busschedule;
use App\Bus;
use App\Region;
use App\Subregion;
use App\Operator;



class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busschedules= Busschedule::all();
        return view('backend.busschedule.schedulelist',compact('busschedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $buses=Bus::all();
         $regions=Region::all();
         $subregions=Subregion::all();
         $operators=Operator::all();
          return view('backend.busschedule.addschedule',compact('buses','regions','subregions','operators'));
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
        'bus_id'=>'required',
        'operator_id'=>'required',

        'region_id'=>'required',
        'subregion_id'=>'required',
        'start_time'=>'required',
        'arrive_time'=>'required',
        'price'=>'required',
        'description'=>'required',

        
       ]);

       // insert data
       // $item->column name=$request->form name

       $busschedule=new Busschedule;
       $busschedule->bus_id=$request->bus_id;
       $busschedule->operator_id=$request->operator_id;

       $busschedule->region_id=$request->region_id;
       $busschedule->subregion_id=$request->subregion_id;
       $busschedule->start_time=$request->start_time;
       $busschedule->arrive_time=$request->arrive_time;
       $busschedule->price=$request->price;
       $busschedule->description=$request->description;

       $busschedule->save();

       return redirect()->route('schedules.index');
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
        $busschedule=Busschedule::find($id);
        $buses=Bus::all();
        $regions=Region::all();
        $subregions=Subregion::all();
         $operators=Operator::all();


        return view('backend.busschedule.scheduleview',compact('busschedule','buses','regions','subregions','operators'));
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
        'bus_id'=>'required',
        'operator_id'=>'required',
        'region_id'=>'required',
        'subregion_id'=>'required',
        'start_time'=>'required',
        'arrive_time'=>'required',
        'price'=>'required',
        'description'=>'required',
        
        
       ]);
        //data update
       $busschedule=Busschedule::find($id);
       $busschedule->bus_id=$request->bus_id;
       $busschedule->operator_id=$request->operator_id;

       $busschedule->region_id=$request->region_id;
       $busschedule->subregion_id=$request->subregion_id;
       $busschedule->start_time=$request->start_time;
       $busschedule->arrive_time=$request->arrive_time;
       $busschedule->price=$request->price;
       $busschedule->description=$request->description;

       $busschedule->save();
        //redirect
       return redirect()->route('schedules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $busschedule=Busschedule::find($id);
        $busschedule->delete();
        return redirect()->route('schedules.index');
    }

    public function getdata(Request $request)
    {
        $schregion= request('id');
        $schsubregion=request('sub');
        // $regions=Region::where('id', $schregion)->get();
        // $subregions=Subregion::where('id', $schsubregion)->get();
        // $buses=Bus::all();
        // $operators=Operator::all();
        $busschedule= Busschedule::where('region_id','=', $schregion)->where('subregion_id','=', $schsubregion)->get();
        // dd($busschedule);
        foreach ($busschedule as $data) 
        {
          $data['regionname']=$data->region->region_name;
          $data['subregionname']=$data->subregion->subregion_name;
          $data['opname']=$data->operator->operator_name;
          $data['oplogo']=$data->operator->operator_logo;
        }
     
        return [$busschedule,$data];
    }

    public function getoperator(Request $request)
    {
      // dd($request);
        $schoperator1= request('sid');
        $schregion1= request('rid');
        $schsubregion1= request('sub');
        // dd($schregion1);
        if($schregion1==null && $schsubregion1==null)
        {
          $busschedule1= Busschedule::where('operator_id', $schoperator1)->get();
               foreach ($busschedule1 as $data1) 
              {
                $data1['regionname1']=$data1->region->region_name;
                $data1['subregionname1']=$data1->subregion->subregion_name;
                $data1['opname1']=$data1->operator->operator_name;
                $data1['oplogo1']=$data1->operator->operator_logo;
              }
        }
        else
        {
            $busschedule1=Busschedule::where('operator_id',"=", $schoperator1)->where('region_id','=', $schregion1)->where('subregion_id','=', $schsubregion1)->get();

            // dd($busschedule1);
                foreach ($busschedule1 as $data1) 
                {
                  $data1['regionname1']=$data1->region->region_name;
                  $data1['subregionname1']=$data1->subregion->subregion_name;
                  $data1['opname1']=$data1->operator->operator_name;
                  $data1['oplogo1']=$data1->operator->operator_logo;
                }
            
      }
      return [$busschedule1,$data1];
        
    }
    
}
