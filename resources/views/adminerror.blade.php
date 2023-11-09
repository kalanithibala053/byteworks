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
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-white bg-dark border rounded border-0 p-4 p-md-5" style="margin: 0px;margin-top: 98px;">
                <h2 class="fw-bold text-white mb-3">To access this page, Report Mr. Kalanithi B</h2>
                <p class="mb-4"> <a class="link-secondary" href="https://wa.me/918220076795" target="_blank"
                        style="text-decoration:none;color:white">Contact</a></p>
                <div class="my-3"><a class="btn btn-primary btn-lg me-2" role="button" href="leader">Home</a>

                    @if(session()->has('username') && session('username') == 'byteworks')
                    <a class="btn btn-primary btn-lg me-1" role="button" href="logout">Logout</a>
                </div>
                @else
                <a class="btn btn-primary btn-lg me-1" role="button" href="admin">Login</a>
                @endif
            </div>
        </div>
    </section>
</body>

</html>