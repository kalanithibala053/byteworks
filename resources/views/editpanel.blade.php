<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
         body {

        }
        .logo-container {
            text-align: center;

        }


        .title-container {
            text-align: center;
            margin-top: 20px;
        }



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
    <title>View Details</title>
<script>
     function Email() {
    var EmailInput = document.getElementById('Email');
    var EmailError = document.getElementById('EmailError');

    if (!validateEmail(EmailInput.value)) {
        EmailError.innerHTML = 'Please enter a valid college Email address';
        EmailError.style.display = 'block';

    } else {
        EmailError.style.display = 'none';
    }
}

function Phone(){
    var phoneInput = document.getElementById('Phone');
    var phoneError = document.getElementById('phoneError');
    if (!validatePhone(phoneInput.value)) {
        phoneError.innerHTML = 'Please enter a valid Phone number';
        phoneError.style.display = 'block';

    } else {
        phoneError.style.display = 'none';
    }
}

function validateEmail(Email) {
    var EmailRegex = /^[^\s@]+@karpagamtech\.ac\.in$/;
    return EmailRegex.test(Email);
}
function validatePhone(number){
            var phoneRegex = /^[0-9]{10}$/;
            return phoneRegex.test(number);
        }

        function Team_Leader_Register_No() {
            var regno1error = document.getElementById('regno1error');
            var Team_Leader_Register_No = document.getElementById('Team_Leader_Register_No');

            if (!validateRegno(Team_Leader_Register_No.value)) {
                regno1error.innerHTML = 'Please enter a valid registration number';
                regno1error.style.display = 'block';
            } else {
                regno1error.style.display = 'none';
            }
        }
        function Member_1_Register_No() {
            var regno1error = document.getElementById('regno2error');
            var Team_Leader_Register_No = document.getElementById('Member_1_Register_No');

            if (!validateRegno(Team_Leader_Register_No.value)) {
                regno1error.innerHTML = 'Please enter a valid registration number';
                regno1error.style.display = 'block';
            } else {
                regno1error.style.display = 'none';
            }
        }
        function Member_2_Register_No() {
            var regno3error = document.getElementById('regno3error');
            var Member_2_Register_No = document.getElementById('Member_2_Register_No');

            if (!validateRegno(Member_2_Register_No.value)) {
                regno3error.innerHTML = 'Please enter a valid registration number';
                regno3error.style.display = 'block';
            } else {
                regno3error.style.display = 'none';
            }
        }
        function Member_3_Register_No() {
            var regno1error = document.getElementById('regno4error');
            var Team_Leader_Register_No = document.getElementById('Member_3_Register_No');

            if (!validateRegno(Team_Leader_Register_No.value)) {
                regno1error.innerHTML = 'Please enter a valid registration number';
                regno1error.style.display = 'block';
            } else {
                regno1error.style.display = 'none';
            }
        }
        function Member_4_Register_No() {
            var regno1error = document.getElementById('regno5error');
            var Team_Leader_Register_No = document.getElementById('Member_4_Register_No');

            if (!validateRegno(Team_Leader_Register_No.value)) {
                regno1error.innerHTML = 'Please enter a valid registration number';
                regno1error.style.display = 'block';
            } else {
                regno1error.style.display = 'none';
            }
        }
        function Member_5_Register_No() {
            var regno1error = document.getElementById('regno6error');
            var Team_Leader_Register_No = document.getElementById('Member_5_Register_No');

            if (!validateRegno(Team_Leader_Register_No.value)) {
                regno1error.innerHTML = 'Please enter a valid registration number';
                regno1error.style.display = 'block';
            } else {
                regno1error.style.display = 'none';
            }
        }
        function validateRegno(Register) {
            var regEx = /^7212\d{8}$/;
            return regEx.test(Register);
        }
        function validateName(name) {
    var namePattern = /^[A-Za-z]+$/;
    return namePattern.test(name);
}
        function validateTeam_Name(name) {
    var namePattern = /^[A-Za-z0-9]+$/;
    return namePattern.test(name);
}

function validator(inputId, errorId) {
    var nameError = document.getElementById(errorId);
    var nameInput = document.getElementById(inputId);

    if (!validateName(nameInput.value)) {
        nameError.innerHTML = 'Please enter a valid name';
        nameError.style.display = 'block';
    } else {
        nameError.style.display = 'none';
    }
}function validateError(inputId, errorId) {
    var nameError = document.getElementById(errorId);
    var nameInput = document.getElementById(inputId);

    if (!validateTeam_Name(nameInput.value)) {
        nameError.innerHTML = 'Please enter a valid name';
        nameError.style.display = 'block';
    } else {
        nameError.style.display = 'none';
    }
}

function Team_Name() {
    validateError('Team_Name', 'Team_Nameerror');
}

function Name1() {
    validator('Member_1', 'Name1error');
}

function Name2() {
    validator('Member_2', 'Name2error');
}

function TLname() {
    validator('Team_Leader', 'tLNameerror');
}

function Name3() {
    validator('Member_3', 'Name3error');
}

function Name4() {
    validator('Member_4', 'Name4error');
}

function Name5() {
    validator('Member_5', 'Name5error');
}

</script>



</head>
<?php

if (function_exists('opcache_reset')) {
    opcache_reset();
}
?>
<body style="background-image: url('img/ed.png') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;">
    <nav class="navbar navbar-expand-md bg-dark py-3" data-bs-theme="dark">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"><img width="20px"
                        height="20px" src="{{ asset('/img/menu.png') }}" alt="Kit Logo"> </span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    @if(session()->has('username'))
                    @if(session()->has('username') && session('username') == 'kalanithi')
                    <li class="nav-item"><a class="nav-link active" href="/adminpanel" style="color:#ffffff8c">Home</a>
                    <li class="nav-item"><a class="nav-link active" href="/evaluate" style="color:#ffffff8c">Mark
                            correction</a>
                    </li>
                    </li>@endif
                    <li class="nav-item"><a class="nav-link active" href="/home" style="color:#ffffff8c">Marks</a></li>
                    <li class="nav-item"><a class="nav-link" href="/voteteam" style="color:#ffffff8c">Expo</a></li>


                    @endif
                    <li class="nav-item"><a class="nav-link" href="/count" style="color:#ffffff8c">Votes</a></li>

                    <li class="nav-item"><a class="nav-link" href="/register" style="color:#ffffff8c">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="/leader" style="color:#ffffff8c">Leader</a></li>
                </ul>
                @if(session()->has('username'))<a class="btn btn-primary ms-md-2" role="button"
                    href="logout">Logout</a>@endif
            </div>
        </div>
    </nav>
    <div class="text-center" style="margin-top:20px">
<p>
   <a  href="/adminpanel" style="color: darkblue; text-decoration: none;">Home</a>&nbsp; &#8594; &nbsp;<a href="#">View Details</a>
</p>

</div>


    <div class="shadow-with-border">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center">

                <div class="col-md-8">
                    <div id="regForm" style="-webkit-box-shadow: 4px 3px 8px 1px #E1E1E1 !important;">



                        <div class="title-container">
                                <div class="col-auto text-dark fw-bold h5 mb-0">
                                    <span style="font-size: 37px; margin: 20px;color:#198754">View Details</span>
                                </div>
                            </div>


<form id="registrationForm" class="row g-3 needs-validation"  method="post" action="/verify">
    @csrf
    <div class="tab">
        <input type="hidden" name="id" value="{{$details->id}}">
        <label for="Email" class="form-label">Enter the Email address <span style="color:red">*</span></label>
        <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter your Email" onblur="Email()" value="{{$details->Email}}">

        <div id="EmailError" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
    <strong>Error!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
</div>



    </div>

    <div class="tab">
        <label for="Phone" class="form-label">Enter the mobile number <span style="color:red">*</span></label>
        <input type="text"  class="form-control" id="Phone" name="Phone" placeholder="Enter your Phone number" value="{{$details->Phone}}"  onblur="Phone()">

        <div id="phoneError" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
            </div>
    </div>
    <div class="tab">
        <label for="Team_Name" class="form-label">Enter the team name <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Team_Name" name="Team_Name" placeholder="Enter your team name" value="{{$details->Team_Name}}"  onblur="Team_Name()">

        <div id="Team_Nameerror" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
            </div>

    </div>

    <div class="tab" style="margin-top:30px">
        <label for="Team_Leader" class="form-label">Enter the team leader name <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Team_Leader" name="Team_Leader" placeholder="Enter your team leader name"  value="{{$details->Team_Leader}}" onblur="TLname()">
        <div id="TLNameerror" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
            </div>


    </div>

    <div class="tab">
        <label for="Team_Leader_Register_No" class="form-label">Enter the team leader Register No. <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Team_Leader_Register_No" name="Team_Leader_Register_No" placeholder="Enter your team leader Register No." value="{{$details->Team_Leader_Register_No}}" onblur="Team_Leader_Register_No()">
    <div id="regno1error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
        <strong>Error!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
    </div>



    </div>


    <div class="tab">
        <label for="Member_1" class="form-label">Enter the First team member's name <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Member_1" name="Member_1" placeholder="Enter the First team member's name"  value="{{$details->Member_1}}"  onblur="Name1()">
        <div id="Name1error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
            </div>

    </div>

    <div class="tab">
        <label for="Member_1_Register_No" class="form-label">Enter the First team member's Register No. <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Member_1_Register_No" name="Member_1_Register_No" placeholder="Enter the First team member's Register No."  value="{{$details->Member_1_Register_No}}" onblur="Member_1_Register_No()">
        <div id="regno2error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
        <strong>Error!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
    </div>

    </div>



    <div class="tab">
        <label for="Member_2" class="form-label">Enter the Second team member's name <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Member_2" name="Member_2" placeholder="Enter the Second team member's name" value="{{$details->Member_2}}"  onblur="Name2()">
        <div id="Name2error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
            </div>

    </div>

    <div class="tab">
        <label for="Member_2_Register_No" class="form-label">Enter the Second team member's Register No. <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Member_2_Register_No" name="Member_2_Register_No" placeholder="Enter the Second team member's Register No." value="{{$details->Member_2_Register_No}}"  onblur="Member_2_Register_No()">
        <div id="regno3error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
        <strong>Error!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
    </div>

    </div>

    <div class="tab">
        <label for="Member_3" class="form-label">Enter the Third team member's name <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Member_3" name="Member_3" placeholder="Enter the Third team member's name"  value="{{$details->Member_3}}" onblur="Name3()">
        <div id="Name3error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
            </div>

    </div>

    <div class="tab">
        <label for="Member_3_Register_No" class="form-label">Enter the Third team member's Register No. <span style="color:red">*</span></label>
        <input type="text" class="form-control" id="Member_3_Register_No" name="Member_3_Register_No" placeholder="Enter the Third team member's Register No."  value="{{$details->Member_3_Register_No}}"   onblur="Member_3_Register_No()">
        <div id="regno4error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
        <strong>Error!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
    </div>

    </div>


        <div class="tab" style="margin-top:30px !important">
        <label for="Member_4" class="form-label">Enter the Forth team member's name </label>
        <input type="text" class="form-control" id="Member_4" name="Member_4" placeholder="Enter the First team member's name" value="{{$details->Member_4}}"  onblur="Name4()">
        <div id="Name4error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;margin-top:10px"></button>
            </div>

    </div>

    <div class="tab" style="margin-top:20px !important">
        <label for="Member_4_Register_No" class="form-label">Enter the Forth team member's Register No. </label>
        <input type="text" class="form-control" id="Member_4_Register_No" name="Member_4_Register_No" placeholder="Enter the Fifth team member's Register No."  value="{{$details->Member_4_Register_No}}"  onblur="Member_4_Register_No()">
        <div id="regno5error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
        <strong>Error!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>

    </div>

            <div class="tab" style="margin-top:30px !important">
        <label for="Member_5" class="form-label">Enter the Fifth team member's name </label>
        <input type="text" class="form-control" id="Member_5" name="Member_5" placeholder="Enter the First team member's name" value="{{$details->Member_5}}"  onblur="Name5()">
        <div id="Name5error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>
            </div>

    </div>

    <div class="tab" style="margin-top:20px !important">
        <label for="Member_5_Register_No" class="form-label">Enter the Fifth team member's Register No. </label>
        <input type="text" class="form-control" id="Member_5_Register_No" name="Member_5_Register_No" placeholder="Enter the Fifth team member's Register No." value="{{$details->Member_5_Register_No}}"  onblur="Member_5_Register_No()">
        <div id="regno6error" class="alert alert-danger alert-dismissible fade show" style="display: none;margin-top:10px">
        <strong>Error!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" style="display:block;"></button>

    </div>


            <div style="margin-bottom:50px;margin-top:20px">
                <button class="btn btn-primary btn-lg me-2" type="submit" style="width: 100px; height: 40px; padding:5px !important;background-color: #9C90E2;border-color:#9C90E2">Register</button>
            </div>
        </div>
    </div>
</form>



                    </div>
                </div>
            </div>



            @if ($errors->any())
<div class="row">
    <div class="col d-flex align-items-center justify-content-center" style="width: 100%;position:fixed;  bottom: 0; left: 0;height:auto">
        <div class="alert alert-danger alert-dismissible fade show custom-shadow" id="mmsss" style="height:auto !important;width:80%;box-shadow: 0 4px 8px rgba(255, 0, 0, 0.2) !important; margin:auto; margin-bottom:50px !important;">
            <strong class="list">Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="list">{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
</div>
@endif
            @include('whatsapp')
</body>

</html>
