<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Subregion;
use DB;
class SubregionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subregions=Subregion::all();
        // dd($subregions);
        
        return view('backend.subregion.subregionlist',compact('subregions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions=Region::all();
        return view('backend.subregion.addsubregion',compact('regions'));
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
            'subregion_name'=>'required',
        ]);
        //If include file, upload 
        //File upload
        
        //Data insert 
        $subregion = new Subregion;
        
        $subregion->subregion_name =$request->subregion_name;
        $subregion->region_id =$request->region_id;
        $subregion->save();


        //Redirect
        return redirect()->route('subregions.index');
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
        $regions=Region::all();
        $subregion=Subregion::find($id);
        return view('backend.subregion.subregionview',compact('regions','subregion'));
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
            'subregion_name'=>'required',
        ]);
       
       
        //data update
        $subregion = Subregion::find($id);
        $subregion->subregion_name =$request->subregion_name;
        $subregion->region_id =$request->region_id;
        $subregion->save();
        
        //redirect
        return redirect()->route('subregions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subregion=Subregion::find($id);
        $subregion->delete();
        //redirect
        return redirect()->route('subregions.index');
    }

    public function getsubregion(Request $request)
    {
        $sid = request('id');
        $subregions = Subregion::where('region_id',$sid)->get();
        return $subregions;
    }
}
