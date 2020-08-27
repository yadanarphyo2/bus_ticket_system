<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Subregion;
use App\Region;
use App\Busschedule;
use App\Customer;
use App\Booking;

class FrontendController extends Controller
{
    public function frontend($value='')
   {
      $regions= Region::all();
      $subregions= Subregion::all();
   		$operators= Operator::all();
   	 	return view('frontendtemplate',compact('operators','regions','subregions'));
   }
   public function nav($value='')
   {
      return view('nav');
   }

   public function contact()
   {
      return view('frontend.contact');
   }
   //  public function dd($value='')
   // {
   		
   // 		$regions= Region::all();
   //    $subregions= Subregion::all();

   // 	 	return view('dd',compact('regions','subregions'));
   // }
   
   public function index(Request $request)
   {
      // dd($request);
      $region=$request->region;
      $subregion=$request->subregion;
      $from=$request->from;
      $passenger=$request->passenger;
      $busschedule= Busschedule::where('region_id','=', $region)->where('subregion_id','=', $subregion)->get();
      $operators=Operator::all();
      $regions= Region::all();
      $subregions= Subregion::all();
      return view('frontend.index',compact('busschedule','regions','subregions','operators','region','subregion','from','passenger'));
   }
   public function selectseat(Request $request,$id)
   {
      // dd($request);
      $dep=$request->depaturedate;
      $passenger=$request->passenger;
      $books= Booking::where('dapature_date','=', $dep)->where('schedule_id','=', $id)->get();
      // dd($books);

      $busschedule=Busschedule::find($id);
      return view('frontend.selectseat',compact('dep','passenger','busschedule','books'));
   }
   public function customer(Request $request,$id)
   {
      // dd($request);
      $seat=$request->seat;
      $dep1=$request->depaturedate;
      $passenger1=$request->passenger;
      
      $busschedule=Busschedule::find($id);
      return view('frontend.customer',compact('seat','dep1','passenger1','busschedule'));
   }
   public function booking($value='')
   {
      $bookings= Booking::all();
      return view('backend.booking.bookinglist',compact('bookings'));
   }

   public function customerstore(Request $request)
    {
         // dd($request);

       $request->validate([
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'address'=>'required',
       ]);

       // insert data
       // $item->column name=$request->form name

       $customer=new Customer;
       $customer->customer_name=$request->name;
       $customer->customer_email=$request->email;
       $customer->customer_phone=$request->phone;
       $customer->customer_address=$request->address;
       $customer->save();

       return [$customer->id,$customer->customer_name];
    }
}
