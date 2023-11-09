</html>
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
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <title>Voting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        .logo-container {
            text-align: center;

        }


        .title-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <style>
        body {}

        #regForm {
            background-color: #ffffff;
            margin: 0px auto;
            font-family: Raleway;
            padding: 40px;
            border-radius: 10px
        }

        #register {

            color: #0d6efd;
        }

        h1 {
            text-align: center
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            -webkit-appearance: none;
        }



        .tab input:focus {

            border: 1px solid #0d6efd !important;
            outline: none;
        }

        input.invalid {

            border: 1px solid #e03a0666;
        }

        .tab {
            display: block;
        }

        button {
            background-color: #0d6efd;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer
        }

        button:hover {
            opacity: 0.8
        }

        button:focus {

            outline: none !important;
        }

        #prevBtn {
            background-color: #bbbbbb
        }


        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 100%;
            display: inline-flex;
            justify-content: center;
        }

        .step {
            height: 40px;
            width: 40px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            color: #6a1b9a;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1
        }


        .step.finish {
            color: #fff;
            background: #6a1b9a;
            opacity: 1;

        }

        .shadow-with-boder {
            box-shadow: 4px 3px 8px 1px #969696 !important;

        }
    </style>
    <title>Document</title>
</head>

<body>
@include('header');
@if(session()->has('username')&& session('username')=='kalanithi')
    <div class="text-center">
<p>
   <a href="adminpanel" style="color: darkblue; text-decoration: none;">Home</a>&nbsp; &#8594; &nbsp;<a href="/voteteam"style="color: darkblue; text-decoration: none;">Team Expo</a>&nbsp; &#8594; &nbsp;<a href="#">Voting</a>
</p>

</div>
@elseif(session()->has('username') && session('username')=='byteworks')
<div class="text-center">
<p>
   <a href="leader" style="color: darkblue; text-decoration: none;">LeaderBoard</a>&nbsp; &#8594; &nbsp;<a href="/voteteam" style="color: darkblue; text-decoration: none;">Team Expo</a>&nbsp; &#8594; &nbsp;<a href="#">Voting</a>
</p>

</div>
@endif
    <div class="shadow-with-border">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center">

                <div class="col-md-8">
                    <div>

                        <div id="regForm" style="-webkit-box-shadow: 4px 3px 8px 1px #E1E1E1 !important;">
                            <div class="title-container">
                                <div class="col-auto text-dark fw-bold h5 mb-0">
                                    <span style="font-size: 25px; margin: 20px;font-size:40px">ByteWorks 2.0</span>
                                </div>
                            </div>

                            <div class="title-container">
                                <div class="col-auto text-dark fw-bold h5 mb-0">
                                    <span style="font-size: 20px; margin: 20px;color:#198754">Vote for your favourite
                                        team</span>
                                </div>
                            </div>


                            <div class="title-container" style=" margin-bottom: 10px;">
                                <div class="col-auto text-dark fw-bold h5 mb-0">

                                    <span
                                        style="font-size:26px; margin: 20px;margin-top:5px !important;color:black">{{$name}}</span>
                                    <form class="text-center" method="post" action="voting_"> @csrf
                                        <input type="hidden" name="Team_Name" value="{{$name}}">
                                </div>
                                @error('Team_Name')
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <strong>Error!</strong>{{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>@enderror
                            </div>

                            <div class="tab">
                                <h6>Enter the Email address</h6>
                                <p><input placeholder="Email" type="Email" name="Email"></p>

                            </div> @error('Email')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <strong>Error!</strong>{{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>@enderror

                            <div style="margin-bottom:50px">
                                <input class="btn btn-primary btn-lg me-2" type="submit" value="Vote"
                                    style="width: 100px; height: 40px; padding-bottom:5px">
                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('whatsapp')
</body>

</html>