<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>
        body {
            text-align: center;
            padding: 40px 10px;
            /* Adjusted padding */
            background: #EBF0F5;
        }

        h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 30px;
            /* Adjusted font size */
            margin-bottom: 10px;
        }

        p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size: 16px;
            /* Adjusted font size */
            margin: 0;
        }

        i {
            color: #9ABC66;
            font-size: 60px;
            /* Adjusted font size */
            line-height: 120px;
            /* Adjusted line height */
            margin-left: -7px;
            /* Adjusted margin */
        }

        .card {
            background: white;
            padding: 30px;
            /* Adjusted padding */
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
            max-width: 400px;
            
        }
    </style>
</head>

<body>
@if(session()->has('username'))
 

    <div class="text-center">
<p>
   
@if(session()->has('username') && session('username') == 'kalanithi')<a href="leader" style="color: darkblue; text-decoration: none;">Home</a>&nbsp; &#8594; &nbsp;@endif<a href="#">Success</a>
</p>

</div>

    @endif<div class="card">
        <div style="border-radius: 100px; height: 100px; width: 100px; background: #F8FAF5; margin: 0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>We received your
            @if(isset($success))
            {{ $success }}
            @endif
            <br /> we'll be in touch shortly!
        </p>
    </div>

</body>

</html>