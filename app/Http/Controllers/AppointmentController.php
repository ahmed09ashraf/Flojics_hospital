<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {

        $users = User :: all() ;
        $specialities =Speciality::all() ;

        return view('appointment', [
            'users' => $users,
            'specialities' => $specialities ,
        ]);

    }


    public function submit(Request $request)
    {
//        dd(Speciality::all()) ;
//        dd($request->all()) ;
            Appointment::create([
            'user_id' => $request['user_id'] ,
            'speciality_id' => $request['speciality_id'] ,
            'phone' => $request['phone'],
            'pname'=>$request['pname'],
            'date' =>$request['date'],
            'time' => $request['time'] ,
            ]);

$req = $request->all() ;
$reqjson = json_encode($req) ;
//dd(request()) ;
        return view('success_app', [

//            'requests' =>$reqjson
        request()

        ]);

    }

}
