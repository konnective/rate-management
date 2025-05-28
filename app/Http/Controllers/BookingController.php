<?php

namespace App\Http\Controllers;

use App\Models\AgodaListing;
use App\Models\BookingListing;
use App\Models\ExpediaListing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
/* 


datasets: [
            {
                label: "Line A",
                data: [7, 8, 8, 9, 9, 9, 10, 11, 14],
                borderColor: "#153F92",
                pointBackgroundColor: "#ffffff",
                pointBorderColor: "#153F92",
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6,
                fill: false,
                tension: 0,
            },
            [
                "label"=> "Line A",
                "data"=> [7, 8, 8, 9, 9, 9, 10, 11, 14],
                "borderColor"=> "#153F92",
                "pointBackgroundColor"=> "#ffffff",
                "pointBorderColor"=> "#153F92",
                "pointBorderWidth"=> 2,
                "pointRadius"=> 4,
                "pointHoverRadius"=> 6,
                "fill"=> false,
                "tension"=> 0,
            ]
            {
              label: 'Line B',
              data: [14,11,9,6,8,7,6,5,4],
              borderColor: "#153F92",
              pointBackgroundColor: "#ffffff",
              pointBorderColor: "#153F92",
              pointBorderWidth: 2,
              pointRadius: 4,
              pointHoverRadius: 6,
              fill: false,
              tension: 0,
            },
        ],*/

   public function bookingList(){

    $platform = 'agoda';
    $startDate = '2025-04-01';
    $endDate = '2025-05-01';
    $dateArray = $this->getFormattedDateRange($startDate,$endDate); 
    $data = [];
    $data['labels'] = ["1 May", "2 May", "3 May", "4 May", "5 May", "6 May", "7 May", "8 May", "9 May","10 May"];
    // $data['labels'] = array_values($dateArray);
    $data['datasets'][0] = [
                "label"=> "Agoda",
                "data"=> [7, 8, 8, 9, 9, 9, 10, 11, 14],
                "borderColor"=> "#e01e4e",
                "pointBackgroundColor"=> "#ffffff",
                "pointBorderColor"=> "#153F92",
                "pointBorderWidth"=> 2,
                "pointRadius"=> 4,
                "pointHoverRadius"=> 6,
                "fill"=> false,
                "tension"=> 0,
            ];
    $data['datasets'][1] = [
                "label"=> "Booking",
                "data"=> [12, 10, 8, 9, 5, 9, 10, 11, 14],
                "borderColor"=> "#2c0692",
                "pointBackgroundColor"=> "#ffffff",
                "pointBorderColor"=> "#153F92",
                "pointBorderWidth"=> 2,
                "pointRadius"=> 4,
                "pointHoverRadius"=> 6,
                "fill"=> false,
                "tension"=> 0,
            ];

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
    public function removeChars($inputString){
        return preg_replace('/\D/', '', $inputString);
    }
    public function getFormattedDateRange($startDateString,$endDateString){
        $startDate = Carbon::parse($startDateString);
        $endDate = Carbon::parse($endDateString);

        $dateRange = [];
        while ($startDate->lte($endDate)) {
            $dateRange[] = $startDate->format('j M');
            $startDate->addDay();
        }
        return $dateRange;
    }
}
