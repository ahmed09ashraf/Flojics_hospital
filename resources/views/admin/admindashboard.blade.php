

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title> Admin</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link rel="stylesheet" href="/css/chartist.min.css">

    <link href="/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/css/nice-select.css" rel="stylesheet">
    <link href="/css/dstyle.css" rel="stylesheet">

</head>

<body>


<!--**********************************
    Main wrapper start
***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Admin dashboard
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">
                        <li class="nav-item">
                            <div class="input-group search-area">
                                <input type="text" class="form-control" placeholder="Search here...">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="/logouts" class="btn btn-primary d-sm-inline-block d-none">Log Out<i class="las la-signal ms-3 scale5"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->


    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Hospital</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Statistics</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">

                <!--appointments -->

                <div>
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                    <span class="me-3">
                                        1
                                    </span>
                                <a href="{{ route('admin.appointments') }} "> <div class="media-body text-white text-end">
                                    <p class="mb-1"><h1 style="color: white ; font-weight: bold"> Appointments</h1></p>
{{--                                    <h3 class="text-white">{{ $apps }}</h3>--}}
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <!--Users -->

                <div>
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                    <span class="me-3">
                                        2
                                    </span>
                                <a href="{{ route('admin.users') }} "> <div class="media-body text-white text-end">
                                        <p class="mb-1"><h1 style="color: white ; font-weight: bold"> Users</h1></p>
                                        {{--                                    <h3 class="text-white">{{ $apps }}</h3>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




                <!--Doctors -->

                <div>
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                    <span class="me-3">
                                        3
                                    </span>
                                <a href="{{ route('admin.doctors') }} "> <div class="media-body text-white text-end">
                                        <p class="mb-1"><h1 style="color: white ; font-weight: bold"> Doctors</h1></p>
                                        {{--                                    <h3 class="text-white">{{ $apps }}</h3>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




                <!--Specialities -->

                <div>
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                    <span class="me-3">
                                        4
                                    </span>
                                <a href="{{ route('admin.specialities') }} "> <div class="media-body text-white text-end">
                                        <p class="mb-1"><h1 style="color: white ; font-weight: bold"> Specialities</h1></p>
                                        {{--                                    <h3 class="text-white">{{ $apps }}</h3>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
<!--**********************************
        Content body end
    ***********************************-->

<!--**********************************
        Footer start
    ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">@ahmed09ashraf</a> 2022</p>
    </div>
</div>
<!--**********************************
        Footer end
    ***********************************-->



<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->

<!-- Required vendors -->
<script src="/js/global.min.js"></script>
<script src="/js/jquery.nice-select.min.js"></script>
<script src="/js/custom.min.js"></script>
<script src="/js/dlabnav-init.js"></script>
<script src="/js/demo.js"></script>
{{--<script src="/js/styleSwitcher.js"></script>--}}
        </div>

    </div></body>


</html>
