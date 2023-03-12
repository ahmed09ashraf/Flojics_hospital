<head>
    <style>


        /* ---setting alert--- */
        #alert-overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: rgba(0 0 0 / 0.6);
            top: 0;
            z-index: 9999;
            display: none;

        }


        #app-alert-menu  {
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 20px;
            top: 50%;
            left: 50%;
            width:300px ;
            min-height: 48px;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            font-size: 14px;
            z-index: 9999;
            transition:  var(--secondary-transition);
            opacity: 0;
            visibility: hidden;
            vertical-align: middle;
        }

        .appMenu {
            text-decoration: none;
            text-align: start;
            padding: 20px;
            cursor: pointer;
            width:300px  ;
            transition: all 5s ease-in-out;
        }

        .appMenu div {
            padding:10px ;
        }

        #btn{
            background-color: darkred;
            border-style: none;
            border-radius: 10px;
            font-size: 20px;
            text-align: center;
            padding :15px ;
            color :white ;
            font-weight: bold;
            cursor: pointer;
        }

        .btncontainer{
            text-align: center;
            padding :30px ;
            margin :30px ;
        }


    </style>
</head>

<body>
<div class="btncontainer">
<button  id="btn">View My Appointment Details</button>
</div>
<div id="alert-overlay"></div>
{{--@foreach($requests as $request)--}}

<div id="app-alert-menu">

    <div class="appMenu">


        <div>
            App Id : {{request()->$request->usr_id}}
        </div>

        <div>
            Patient Name :
        </div>

        <div>
            Speciality Name :
        </div>

        <div>
            Phone :
        </div>

        <div>
            Date :
        </div>

        <div>
            Time :
        </div>
        <br><br>
        <a id="cancel-app" >Cancel</a>
    </div>
{{--    @endforeach--}}
</div>



<script>

    document.getElementById("btn").addEventListener('click',function (){
        let alert  =document.getElementById("alert-overlay");
        let app =document.getElementById("app-alert-menu");
        app.style.transition= " 0.2s ease-in-out" ;
        alert.style.display = "block" ;
        app.style.visibility = "visible" ;
        app.style.opacity = 1 ;
    })

    document.getElementById("cancel-app").addEventListener('click',function (){
        let alert  =document.getElementById("alert-overlay");
        let setting =document.getElementById("app-alert-menu");
        app.style.transition= " 0.2s ease-in-out" ;
        alert.style.display = "none" ;
        app.style.visibility = "hidden" ;
        app.style.opacity = 0 ;
    })


</script>
</body>
