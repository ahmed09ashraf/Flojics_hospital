<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminlogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            'code' => 'required' ,
        ]);

        $user = User::where('email', $data['email'])->first();
        $code = $request['code'] ;

        if (!$user || !Hash::check($data['password'], $user->password) || $code!=="admin123") {
            return response([
                'msg' => 'Unauthorized Admin'
            ], 401);
        }

        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user' => $user,
            'token' => $token
        ];

        return response($res, 201);
    }

    public function users(){
        $users = User::all() ;
        return $users ;
    }

    public function specialities(){
        $specialities = Speciality::all() ;
        return $specialities ;
    }

    public function addSpeciality(Request $request){
        $data = $request->validate([
            'name' => 'required',
        ]);

        $speciality = Speciality::create([
            'name' => $data['name'],
        ]);


        $res = [
            'speciality' => $speciality ,
        ];
        return response($res, 201);
    }


    public function doctors(){
        $doctors = Doctor::all() ;
        return $doctors ;
    }

    public function addDoctor(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required' ,
        ]);

        $doctor = Doctor::create([
            'name' => $data['name'],
            'email' => $data['email'] ,
        ]);


        $res = [
            'doctor' => $doctor ,
        ];
        return response($res, 201);
    }

}
