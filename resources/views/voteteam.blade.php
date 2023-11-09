<!DOCTYPE html>
<html lang="en">

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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <title>Teamvote</title>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    @if(session()->has('username'))
    @include('header')
    <div class="d-sm-flex justify-content-between align-items-center mb-4"><a
            class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button"
            href="https://new.express.adobe.com/tools/generate-qr-code" target="_blank"
            style="background-color:#A8D8D5; border-color: transparent !important; color:black; font-weight:bold">QR
            Code</a>
    </div>
@if(session()->has('username')&& session('username')=='kalanithi')
    <div class="text-center">
<p>
   <a href="adminpanel" style="color: darkblue; text-decoration: none;">Home</a>&nbsp; &#8594; &nbsp;<a href="#">Team Expo</a>
</p>

</div>
@elseif(session()->has('username') && session('username')=='byteworks')
<div class="text-center">
<p>
   <a href="leader" style="color: darkblue; text-decoration: none;">LeaderBoard</a>&nbsp; &#8594; &nbsp;<a href="#">Team Expo</a>
</p>

</div>
@endif
    @if(count($team) > 0)
    <div class="row justify-content-center" style="margin-top:40px;margin-left:20px;margin-right:20px">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col-md-7 me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"
                                style="margin-bottom:20px !important;color:#198754 !important;"><span>Add Team</span>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0" style="margin-right:20px">
                                <form action="insert" method="post">
                                    @csrf
                                    <select name="Team_Name">
                                        <optgroup label="Team Name">
                                            @foreach($team as $data)

                                            <option value="{{$data->Team_Name}}">{{$data->Team_Name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                            </div>
                        </div>
                        <div class="col-auto" style="margin-top: 37px;margin-left:37px"><input class="btn btn-primary" type="submit"
                                value="Feed"
                                style="background-color:#A8D8D5; border-color: transparent !important; color:black">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        @if(count($teamexpo) > 0)
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="text-uppercase text-success fw-bold text-xs mb-1"
                            style="margin-bottom:20px !important;"><span>Team&nbsp;</span></div>
                        @foreach($teamexpo as $dat)
                        <div class="col-md-8 me-2" style="margin-top">

                            <div class="text-dark fw-bold h5 mb-0"><span>{{$dat->Team_Name}}</span></div>
                        </div>
                        <div class="col-auto" style="margin-top: 5px;text-decorations:none;last-review:none"><a
                                href="vote?name={{$dat->Team_Name}}"><img width="20px" height="20px"
                                    src="{{ asset('/img/link.png') }}" alt="Kit Logo"></a></div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@else
    <div class="row  justify-content-center" style="margin:20px">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">

                            <div class="text-dark fw-bold h5 mb-0">

                                <span style="font-size: 20px;">No Teams Available</span>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

    <div class="row">
    <div class="col d-flex align-items-center justify-content-center " style="width: 30% !important;">


        @error('Team_Name')
        <div class="alert alert-danger alert-dismissible fade show custom-shadow" style="width:50%;box-shadow: 0 4px 8px rgba(255, 0, 0, 0.2) !important">
            <strong>Error!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @enderror

    </div>
</div>

    @include('whatsapp')
    @else
    @include('adminerror')
    @endif
</body>

</html>