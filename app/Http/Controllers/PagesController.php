<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //



    public function getWelcome()
    {
        return view('welcome');
    }


    public function getBuyTrip()
    {
        return view('reserve');
    }


    public function myReservation()
    {
        return view('myReservation');
    }


    public function getSearchResult()
    {



        $station_id = Request::get('value');

        $result = DB::table('stop_at')
            ->select(DB::raw("*"))
            ->where('value', '=', $station_id)->get();

        //return $result;
        return view('search_results')->with($result);


    }

    public function getNotify()
    {
        return view('notification');
    }

    public function getAbout()
    {
       // $name='TRAKAM';
        return view('about');
    }

}
