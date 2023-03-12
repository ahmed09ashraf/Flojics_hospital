@extends('layouts.app')

@section('content')
<div class="container">
    <div style="text-align: center ; color:dodgerblue ; font-size: 16px ; font-weight: bold">
    <h1>SPECIALITIES</h1>
    </div>
    <div class="row flex-row">
        <div class="col-lg-6 p-4">
            <div class="card ">
                <div class="card-header  bg-info">General practice</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>
        <div class="col-lg-6 p-4 ">
            <div class="card ">
                <div class="card-header  bg-info">Pediatrics</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>

        <div class="col-lg-6 p-4">
            <div class="card ">
                <div class="card-header  bg-info">Radiology</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>

        <div class="col-lg-6 p-4">
            <div class="card ">
                <div class="card-header  bg-info">Ophthalmology</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>

        <div class="col-lg-6 p-4">
            <div class="card ">
                <div class="card-header  bg-info">Sports medicine and rehabilitation</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>

        <div class="col-lg-6 p-4">
            <div class="card ">
                <div class="card-header  bg-info">Oncology</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>

        <div class="col-lg-6 p-4">
            <div class="card ">
                <div class="card-header  bg-info">Dermatology</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>

        <div class="col-lg-6 p-4">
            <div class="card ">
                <div class="card-header  bg-info">Emergency Medicine</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>

        @foreach($specialities as $speciality)
        <div class="col-lg-6 p-4">
            <div class="card ">

                <div class="card-header  bg-info">{{$speciality->name}}</div>

                <div class="card-body">

                    {{ __('            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.
') }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<br><br>
    <div style="text-align: center ; text-decoration: none ; color:white ;">
        <a href="{{ route('user.appointment') }}"><button class="btn btn-danger" style="font-size: 24px ;">Appointment</button></a>
    </div>
@endsection


