<!DOCTYPE html>
<html>




<head>
    <title>Appointment</title>
    <link rel=" stylesheet" href="/css/master.css">


</head>

<body>

<div class="allcontainer">

    <div class="container">
        <h1> Appointment Form </h1>
        <br><br>


        <form method="post" action="/success_app" id="appoinment_form">
            @csrf
            <div>

                <select name="user_id" class="form-control">

                        <option value="{{ Auth::user()->id}}">{{ Auth::user()->name }}</option>

                </select>

                <input type="text" placeholder="Patient_Name" name="pname">

                <select  id='sel_ser' name="speciality_id" class="form-select">
                    @foreach($specialities as $speciality)
                        <option value="{{$speciality->id}}">{{ $speciality->name }}</option>
                    @endforeach
                </select>








            </div>
            <div>
                <label> </label>

                <input type="phone" name="phone" required placeholder="Your phone">
            </div>

            <div>
                <input type="date" id="formdate" name="date" required placeholder="date" class="date">
                <input type="time" min="12:00" max="21:00"  name="time" id="formtime" required placeholder=" time"  class="time">
            </div>
            <div>
                <button type="submit" value="Make Appointment"><span></span>Make Appointment</button>


            </div>
        </form>
    </div>
</div>







<script>
    var date = new Date();

    var day = date.getDate() + 1,
        month = date.getMonth() + 1,
        year = date.getFullYear(),
        hour = 12,
        min = 0;

    month = (month < 10 ? "0" : "") + month;
    day = (day < 10 ? "0" : "") + day;
    hour = (hour < 10 ? "0" : "") + hour;
    min = (min < 10 ? "0" : "") + min;

    var today = year + "-" + month + "-" + day,
        displayTime = hour + ":" + min;

    document.getElementById('formdate').value = today;
    document.getElementById("formtime").value = displayTime;

    document.getElementById('formdate').setAttribute("min", today);
</script>

</body>

</html>
