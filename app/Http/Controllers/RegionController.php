<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;


class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions=Region::all();
        return view('backend.region.regionlist',compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.region.addregion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'region_name'=>'required'
            
        ]);
        //If include file, upload 
        //File upload

        //Data insert 
        $region = new Region;
        $region->region_name =$request->region_name;
        $region->save();


        //Redirect
        return redirect()->route('regions.index');
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
       $region=Region::find($id);
        return view('backend.region.regionview',compact('region'));
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

            'region_name'=>'required'
            
        ]);

        //if include file, upload
        //data update
        $region = Region::find($id);
        
        $region->region_name =$request->region_name;
        
        $region->save();
        
        //redirect
        return redirect()->route('regions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region=Region::find($id);
        $region->delete();
        //redirect
        return redirect()->route('regions.index');
    }

}
