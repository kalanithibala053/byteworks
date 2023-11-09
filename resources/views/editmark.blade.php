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
    .kala {

    }

    .kala:hover {
      color: darkblue !important;
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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
     function check1(id) {
        var data=document.getElementById(id);
        validator(data.value);
    }
    function check2(id) {
      var data=document.getElementById(id);
        validator(data.value);
    }
    function check3(id) {
      var data=document.getElementById(id);
        validator(data.value);
    }
    function check4(id) {
      var data=document.getElementById(id);
        validator(data.value);
    }
    function check5(id) {
      var data=document.getElementById(id);
        validator(data.value);
    }
    function check6(id) {
      var data=document.getElementById(id);
        validator(data.value);
    }function check7(id) {
      var data=document.getElementById(id);
        validator(data.value);
    }
    function check8(id) {
      var data=document.getElementById(id);
        validator(data.value);
    }

    function validator(data) {
        var nameError = document.getElementById('mmsss');
        var displayError = document.getElementById('row12');


        if (!(data>=0 && data<=10)) {
          nameError.style.display = 'block';
            nameError.innerHTML = 'Error! Please enter a valid score ';
            displayError.style.display = 'block';

        } else {
            nameError.style.display = 'none';
            displayError.style.display = 'none';

        }
    }

  </script>

</head>

<body>
@include('header');

<div class="text-center">
<p>
  <a href="adminpanel" style="color: darkblue; text-decoration: none;">Home</a>&nbsp; &#8594; &nbsp;<a href="#">Mark Correction</a>
</p>

</div>

  @if(count($team)>0)

  <table class="table" style="background:white !important;">
    <thead>
        <tr>
            <th scope="col">Team Name</th>
            <th scope="col">Quiz</th>
            <th scope="col">Coding Individual</th>
            <th scope="col">Debate</th>
            <th scope="col">Tech Expo</th>
            <th scope="col">Presentation</th>
            <th scope="col">MS/Design</th>
            <th scope="col">Tech Games</th>
            <th scope="col">Codevs</th>
            <th scope="col">Change</th>
        </tr>
    </thead>
    <tbody>

    @foreach($team as $dat)
      @php
      $totalScore = $dat->quiz + $dat->coding + $dat->debate + $dat->expo + $dat->presentation + $dat->design + $dat->techgames + $dat->codevs;
      @endphp


      @if($totalScore > 0)
      <form action="/up" method="post">
        @csrf
        <input type="hidden" name="Team_Name" value="{{$dat->Team_Name}}">
        <tr>
          <th scope="row">{{$dat->Team_Name}}</th>
          <td>
            @if($dat->quiz > 0)
            <input type="text" style="width:100px;height:25px" id="quiz{{$dat->Team_Name}}" class="score-input" value="{{$dat->quiz}}" name="quiz"
            onblur="check1(this.id)">
            @else
            <input type="text"  placeholder="NA" style="width:100px;height:25px" name="quiz" disabled>
            @endif
          </td>
          <td>
            @if($dat->coding > 0)
            <input type="text" style="width:100px;height:25px"id="coding{{$dat->Team_Name}}" class="score-input" value="{{$dat->coding}}" name="coding"
            onblur="check2(this.id)">
            @else
            <input type="text" placeholder="NA" style="width:100px;height:25px" name="coding" disabled>
            @endif
          </td>
          <td>
            @if($dat->debate > 0)
            <input type="text" style="width:100px;height:25px"id="debate{{$dat->Team_Name}}" class="score-input" value="{{$dat->debate}}" name="debate"
            onblur="check4(this.id)">
            @else
            <input type="text" placeholder="NA" style="width:100px;height:25px" name="debate" disabled>
            @endif
          </td>
          <td>
            @if($dat->expo > 0)
            <input type="text" style="width:100px;height:25px"id="expo{{$dat->Team_Name}}" class="score-input" value="{{$dat->expo}}" name="expo"
            onblur="check6(this.id)">
            @else
            <input type="text" placeholder="NA" style="width:100px;height:25px" name="expo" disabled>
            @endif
          </td>
          <td>
            @if($dat->presentation > 0)
            <input type="text" style="width:100px;height:25px"id="presentation{{$dat->Team_Name}}" class="score-input" value="{{$dat->presentation}}"
              name="presentation" onblur="check5(this.id)">
            @else
            <input type="text" placeholder="NA" style="width:100px;height:25px" name="presentation" disabled>
            @endif
          </td>
          <td>
            @if($dat->design > 0)
            <input type="text" style="width:100px;height:25px"id="design{{$dat->Team_Name}}" class="score-input" value="{{$dat->design}}" name="design"
            onblur="check3(this.id)">
            @else
            <input type="text"   placeholder="NA" style="width:100px;height:25px" name="design" disabled>
            @endif
          </td>
          <td>
            @if($dat->techgames > 0)
            <input type="text" style="width:100px;height:25px"id="techgames{{$dat->Team_Name}}" class="score-input" value="{{$dat->techgames}}"
              name="techgames" onblur="check7(this.id)">
            @else
            <input type="text"  placeholder="NA" style="width:100px;height:25px" name="techgames" disabled>
            @endif
          </td>
          <td>
            @if($dat->codevs > 0)
            <input type="text" style="width:100px;height:25px" id="codevs{{$dat->Team_Name}}"class="score-input" value="{{$dat->codevs}}" name="codevs"
            onblur="check8(this.id)">
            @else
            <input type="text"  placeholder="NA" style="width:100px;height:25px" name="codevs" disabled>
            @endif
          </td>
          <td>
            <div class="text-dark fw-bold h5 mb-0">
              <input class="btn btn-primary" type="submit"value="Update">
            </div>
          </td>
        </tr>
      </form>
      @endif
      @endforeach
    </tbody>
</table>
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


  @if(session('success'))
  <div class="row">
    <div class="col d-flex align-items-center justify-content-center" style="width: 100%; position: fixed; bottom: 0; left: 0; height: 100vh;">

        <div class="alert alert-success alert-dismissible fade show custom-shadow" style="width:60%; box-shadow: 0 4px 8px rgba(0, 255, 0, 0.2) !important; margin:auto; margin-bottom:100px;">
            <strong>Success!</strong> Mark has been updated for&nbsp;{{ session('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>

    </div>
</div>
<?php

if (function_exists('opcache_reset')) {
    opcache_reset();
}
?>
@endif
@if ($errors->any())
<div class="row" >
    <div class="col d-flex align-items-center justify-content-center" style="width: 100%;position:fixed;  bottom: 0; left: 0;height:auto">

        <div class="alert alert-danger alert-dismissible fade show custom-shadow" id="mmsss" style="height:auto !important;width:60%;box-shadow: 0 4px 8px rgba(255, 0, 0, 0.2) !important; margin:auto; margin-bottom:100px !important;">
        <strong>Error!</strong>
        <ul>
        @error('quiz')<li>{{$message}}</li>@enderror
        @error('coding')<li>{{$message}}</li>@enderror
        @error('presentation')<li>{{$message}}</li>@enderror
        @error('design')<li>{{$message}}</li>@enderror
        @error('techgames')<li>{{$message}}</li>@enderror
        @error('codevs')<li>{{$message}}</li>@enderror
        @error('debate')<li>{{$message}}</li>@enderror
        @error('expo')<li>{{$message}}</li>@enderror</ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>

    </div>
</div>
@endif
<div class="row" id="row12" style="display:none">
    <div class="col d-flex align-items-center justify-content-center" style="width: 100%;position:fixed;  bottom: 0; left: 0; height: 100vh;">

        <div class="alert alert-danger alert-dismissible fade show custom-shadow" id="mmsss" style="width:60%;box-shadow: 0 4px 8px rgba(255, 0, 0, 0.2) !important; margin:auto; margin-bottom:100px">

        </div>

    </div>
</div>


  @include('whatsapp')


  </div>
  </div>
  </div>
</body>

</html>
