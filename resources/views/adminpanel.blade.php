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
    <title>Panel</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"
       ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
       ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        ></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">

</head>

<body>


    @if(session()->has('username') && session('username') == 'kalanithi')
    @include('header');
    <div class="text-center">
<p>
  <a href="#">Home</a>
</p>

</div>
    

    <div class="row" style="margin:20px">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                                
                            <a href="#Modal" style="text-decoration: none;">
                                <span data-toggle="modal" data-target="#Modal">Registration Report</span></a>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0">
                                <a href="generate-report-register" style="text-decoration: none; color: black;">
                                    <span style="font-size: 15px;">Click here to Download</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                            <a href="leader" style="text-decoration: none;">
                                <span style="color:#19C88A">LeaderBoard Report</span></a>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0">
                                <a href="generate-report-leader" style="text-decoration: none; color: black;">
                                    <span style="font-size: 15px;">Click here to Download</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                            <a href="count" style="text-decoration: none;">
                                <span style="color:#37B9CC">Voting Report</span></a>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0">
                                <a href="genereate-report-vote" style="text-decoration: none; color: black;">
                                    <span style="font-size: 15px;">Click here to Download</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                            <a href="#exampleModel" style="text-decoration: none; color: black;"data-toggle="modal" data-target="#exampleModal">
                                <span style="color:#E25E3E" data-toggle="modal" data-target="#exampleModal">Event Report</span></a>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0">
                                <a href="generate-Report-event" style="text-decoration: none; color: black;">
                                    <span style="font-size: 15px;">Click here to Download</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " >
  <div class="modal-content " style="width: 900px  !important;" >
      <div class="modal-header  " >
        <h5 style="width:100%">Event Score details</h5>
        <div class="text-right" style="width: 900px !important;">
          <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i>
        </div>
      </div>
      <div class="modal-body text-center" style="width: 900px !important;">
    <div class="mx-auto">
        <table class="table table-bordered" style="width: auto !important;">
           
  <thead>
    <tr>
      <th scope="col">Team name</th>
      <th scope="col">Quiz</th>
      <th scope="col">Coding</th>
      <th scope="col">Debate</th>
      <th scope="col">Tech Expo</th>
      <th scope="col">Presentation</th>
      <th scope="col">Ms/design</th>
      <th scope="col">Tech Games</th>
      <th scope="col">Code VS</th>
    </tr>
  </thead>
  <tbody>
    @foreach($events as $dat)
    <tr>
      <th scope="row">{{$dat->Team_Name}}</th>
      <td>{{$dat->quiz}}</td>
      <td>{{$dat->coding}}</td>
      <td>{{$dat->debate}}</td>
      <td>{{$dat->expo}}</td>
      <td>{{$dat->presentation}}</td>
      <td>{{$dat->design}}</td>
      <td>{{$dat->techgames}}</td>
      <td>{{$dat->codevs}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog " >
  <div class="modal-content "  >
      <div class="modal-header float-right" >
        <h5>Registration Report details</h5>
        <div class="text-right" >
          <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i>
        </div>
      </div>
      <div class="modal-body" >
          


        <div>
          
          <table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">Team name</th>
      <th colspan="2">Links</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($teamlist as $tat)
    <tr>
      <th scope="row">{{$tat->Team_Name}}</th>
      <td>
      <a href="/viewdatas/{{$tat->id}}"><img width="20px" height="20px"
                                    src="{{ asset('/img/link.png') }}" alt="Kit Logo"></a></td>
        <th>
        <a href="/delete/{{$tat->id}}"><img width="20px" height="20px"
                                    src="{{ asset('/img/delete.png') }}" alt="Kit Logo"></a>
        </th>
    </tr>
    @endforeach
  </tbody>
</table>

        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



    @include('whatsapp')

    @else
    @include('adminerror')

    @endif




</body>

</html>