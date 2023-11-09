<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <style>
        body {
            background-image: url('img/ed.png') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
        }
    </style>
    <link rel="icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Votes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/js/theme.js') }}"></script>
    <script src="{{ asset('/js/js/bs-init.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">
    <script>

        setTimeout(function () {
            window.location.href = "/count";
        }, 100000);
    </script>

</head>

<body>


@include('header');
<div class="text-center">
<p>
  <a href="adminpanel" style="color: darkblue; text-decoration: none;">Home</a>&nbsp; &#8594; &nbsp;<a href="#">Voting</a>
</p>

</div>
    @foreach($coun as $dat)


    @php

    $count = $dat->vote;

    @endphp
    @endforeach
    @if($count===0)
    <div class="row  justify-content-center" style="margin:20px">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">

                            <div class="text-dark fw-bold h5 mb-0">

                                <span style="font-size: 20px;">No Available Votes</span>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    @else



    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>TOTAL
                                                    VOTE</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>{{$count}}</span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>










                    <div class="row">
                        <div class="col-lg-10 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Voted Teams</h6>
                                </div>
                                <div class="card-body">
                                    @foreach($team as $data)

                                    @php

                                    if($count==0){
                                    $percentage=0;
                                    }else{
                                    $percentage = ($data->vote / $count) * 100;}
                                    @endphp


                                    <h4 class="small fw-bold">{{$data->Team_Name}} <span class="float-end">{{$data->vote}}
                                        </span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" aria-valuenow="20" aria-valuemin="0"
                                            aria-valuemax="100"
                                            style="width: {{$percentage}}%;background-color:#9C90E2 !important"><span
                                                class="visually-hidden">{{$data->vote}}</span></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @include('whatsapp')

</body>

</html>
