<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators= Operator::all();
        return view('backend.operator.operatorlist',compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.operator.addoperator');
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
        'operator_name'=>'required|min:4',
        'operator_email'=>'required',
        'operator_phone'=>'required',
        'operator_address'=>'required',
        'operator_logo'=>'required',
       ]);
       $imageName=time().'.'.$request->operator_logo->extension();
       $request->operator_logo->move(public_path('backend/opeatorimg/'),$imageName);
       $myfile='backend/opeatorimg/'.$imageName;

       // insert data
       // $item->column name=$request->form name

       $opeator=new Operator;
       $opeator->operator_name=$request->operator_name;
       $opeator->operator_email=$request->operator_email;
       
       $opeator->operator_phone=$request->operator_phone;
       $opeator->operator_address=$request->operator_address;
       $opeator->operator_logo=$myfile;
   
       $opeator->save();

       return redirect()->route('operators.index');
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
        
        $operator=Operator::find($id); 
        return view('backend.operator.operatorview',compact('operator'));
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
        'operator_name'=>'required|min:4',
        'operator_email'=>'required',
        'operator_phone'=>'required',
        'operator_address'=>'required',
     
        'operator_logo'=>'required',
       ]);

        //if include file,upload
       if ($request->hasFile('operator_logo')) {
        $imageName=time().'.'.$request->operator_logo->extension();
       $request->operator_logo->move(public_path('backend/opeatorimg/'),$imageName);
       $myfile='backend/opeatorimg/'.$imageName;

        $oldphoto=$request->old_logo;
        @unlink($oldphoto);
   }else{
        $myfile=$request->old_logo;
   }

        //data update
       $opeator=Operator::find($id);
       $opeator->operator_name=$request->operator_name;
       $opeator->operator_email=$request->operator_email;
       $opeator->operator_phone=$request->operator_phone;
       $opeator->operator_address=$request->operator_address;
       $opeator->operator_logo=$myfile;
       $opeator->save();
        //redirect
       return redirect()->route('operators.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operator=Operator::find($id);
        $operator->delete();
        //redirect
        return redirect()->route('operators.index');
    }
}
