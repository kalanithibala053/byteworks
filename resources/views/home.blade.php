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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <link rel="icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
@if(session()->has('username'))
    @include('header');


    <div class="text-center">
<p>
   <a href="adminpanel" style="color: darkblue; text-decoration: none;">Home</a>&nbsp; &#8594; &nbsp;<a href="home">Mark</a>
</p>

</div>


    @if(count($team) > 0)
    <div class="row justify-content-center" style="margin:50px; margin-bottom:0px !important">
        <div class="col-md-11 col-xl-3 col-xxl-10 mb-4" style="width:auto !important">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body" style="width:auto !important">
                    <div class="row align-items-center no-gutters">
                        <div class="col-md-4 col-xxl-3 me-2" style="width:auto !important">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"
                                style="margin-bottom:20px !important;"><span style="color:#E25E3E">Team Name</span>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0"
                            style="margin-bottom:10px !important;">
                                <form action="edit" method="post">
                                    @csrf
                                    <select name="Team_Name" label="Team">
                                        <optgroup label="Teams">
                                            @foreach($team as $dat)
                                            <option value="{{$dat->Team_Name}}">{{$dat->Team_Name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                            </div>
                           
                        </div>
                        <div class="col-md-3 col-xxl-3 me-2" style="margin:right:20px !important;padding-right:100px" >
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"
                                style="margin-bottom:20px !important;"><span style="color:#E25E3E" st>Events</span>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0" 
                            style="margin-bottom:10px !important;">
                                <select name="event" >
                                    <optgroup label="Events" >
                                    <option value="" selected>events</option>
                                        <option value="quiz">Quiz</option>
                                        <option value="coding">Coding-In</option>
                                        <option value="debate">Debate</option>
                                        <option value="expo">Tech-Expo</option>
                                        <option value="presentation">Presentation</option>
                                        <option value="design">Ms-office/Design</option>
                                        <option value="techgames">Tech Games</option>
                                        <option value="codevs">Coding vs</option>

                                    </optgroup>
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-xxl-3 me-2"
                        style="margin-bottom:10px !important; padding-left:30px !important">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"
                                style="margin-bottom:20px !important;"><span style="color:#E25E3E">Marks</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><input type="text" name="score" id="score"
                                    style="width: 170.8px;" placeholder="Score" onblur="Check()">
                            </div>

          <script>

function Check() {
    var score = document.getElementById('score');
    var nameError = document.getElementById('error');
        var displayError = document.getElementById('row');
        if (!validatescore(score.value)) {
            nameError.innerHTML = 'Error! Please enter a valid score ';
            displayError.style.display = 'block';
         


        } else {
            nameError.style.display = 'none';
            displayError.style.display = 'none';
            
        }
    }

    function validatescore(score) {
        var pattern = /^(10|[0-9](\.[0-9])?)$/;
        return pattern.test(score);
    }

  
        
       
    
   

          </script>                 
                        </div>
                        <div class="col-md-3 col-xxl-1 me-2" style="margin-top:17px">
                            <div class="text-dark fw-bold h5 mb-0" style="margin: 0px;margin-top: 17px;"><button
                                    class="btn btn-primary" type="submit"
                                    style="background-color:#E25E3E;border-color:#E25E3E">Update</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<div class="row" id="row" style="display:none">
    <div class="col d-flex align-items-center justify-content-center " style="width: 60% !important;">

       
        <div class="alert alert-danger alert-dismissible fade show custom-shadow" id="error"style="width:60%;box-shadow: 0 4px 8px rgba(255, 0, 0, 0.2) !important">
            
        </div>
        
        </div>
</div>
<div class="row">
    <div class="col d-flex align-items-center justify-content-center " style="width: 30% !important;">

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show custom-shadow" style="width:60%;box-shadow: 0 4px 8px rgba(255, 0, 0, 0.2) !important">
            <strong>Error!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <br>
        </div>
        @endif
        </div>
</div>
        <div class="row">
    <div class="col d-flex align-items-center justify-content-center " style="width: 30% !important;">

        @error('event')
        <div class="alert alert-danger alert-dismissible fade show custom-shadow" style="width:60%;box-shadow: 0 4px 8px rgba(255, 0, 0, 0.2) !important">
            <strong>Error!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @enderror
        </div>
</div>
        <div class="row">
    <div class="col d-flex align-items-center justify-content-center " style="width: 30% !important;">

        @error('score')
        <div class="alert alert-danger alert-dismissible fade show custom-shadow" style="width:60%;box-shadow: 0 4px 8px rgba(255, 0, 0, 0.2) !important">
            <strong>Error!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @enderror
        </div>
</div>
        <div class="row">
    <div class="col d-flex align-items-center justify-content-center " style="width: 60% !important;">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show custom-shadow" style="width:60%;box-shadow: 0 4px 8px rgba(0, 255, 0, 0.2) !important;">
            <strong>Success!</strong> Mark has been updated for&nbsp;{{ session('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
    </div>
</div>


    @include('whatsapp')
    @else
    @include('adminerror')

    @endif
    </div>
        </div>
    </div>
</body>

</html>