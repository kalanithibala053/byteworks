<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/img/KIT LOGO.png') }}" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            color: grey;
            text-align: center;
            padding: 10px 0;
            font-size: 13px;

        }

        .kala {

            color: black;
            font-weight: bold;
        }

        .kala:hover {
            color: grey !important;
        }
    </style>
</head>

<body>


   <div class="shadow border-start-primary py-2" style="position:fixed;display:flex;bottom:0;right:0;margin-right:20px;margin-bottom:60px;width:60px;height:60px;background-color:darkblue;border-radius:30px;">
<a href="https://wa.me/919944062939"style="margin-left:7px !important;margin-top:0px"><img src="{{asset('img/help-desk.png')}}" alt="" srcset="" width="45px" height="45px"></a>
</div>


    <div class="footer" style="padding-bottom:10px !important;margin-bottom:5px;position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #ffffff;
      color: grey;
      text-align: center;
      padding: 10px 0;
      font-size:13px;">
        Developed By <a href="https://kalanithi.vercel.app/" target="_blank" class="kala"> Mr.B. Kalanithi</a> & Team,
        Department of IT, KIT, Batch-2024
    </div>

</body>

</html>