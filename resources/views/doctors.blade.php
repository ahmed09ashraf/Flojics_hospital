@extends('layouts.app')

@section('content')



<div class="maincontainer">
<div class="gallery">
    @foreach($doctors as $doctor)
    <div class="gallery-item">
        <img src="/images/OIP.jpg" />
        <div class="doctor_name">
          Dr :  {{$doctor ->name}}
        </div>
        <div class="doctor_info">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic pariatur, dolorem quos, animi eveniet rem earum corporis ratione consectetur sunt in fugiat nulla sit. Accusantium exercitationem ipsa modi explicabo sit.

        </div>
    </div>


@endforeach
</div>
@endsection
