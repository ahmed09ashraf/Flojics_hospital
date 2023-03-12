<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
public function index(){
    return 'HELLO TORRES' ;
}


    public function submit(Request $request)
    {
        $data = $request->validate([
            'speciality_id' => 'required|string',
            'phone' => 'required|string',
            'pname' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string',
        ]);


        if (!$data['speciality_id'] || !$data['phone']  ) {
            return response([
                'msg' => 'There is empty field'
            ], 401);
        }

        Appointment::create([
            'user_id' => $request['user_id'] ,
            'speciality_id' => $request['speciality_id'],
            'phone' => $request['phone'],
            'pname'=>$request['pname'],
            'date' =>$request['date'],
            'time' => $request['time'] ,
        ]);


        $res = [
            'speciality_id' => $request['speciality_id'],
            'phone' => $request['phone'],
            'pname'=>$request['pname'],
            'date' =>$request['date'],
            'time' => $request['time'] ,
        ];

        return response($res, 201);


    }
}
