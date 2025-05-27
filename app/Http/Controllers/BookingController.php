<?php

namespace App\Http\Controllers;

use App\Models\AgodaListing;
use App\Models\BookingListing;
use App\Models\ExpediaListing;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //

   public function bookingList(){

    // $data = AgodaListing::all();   
    $data = BookingListing::all();   


          return response()->json([
            "data" => $data
        ]);
    }


    public function agodaData(){
        $data = AgodaListing::all();
        return $data;
    }

    public function bookingData(){
        $data = BookingListing::all();
        return $data;
    }

    public function expediaData(){
        $data = ExpediaListing::all();
        return $data;
    }
}
