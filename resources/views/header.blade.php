<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
<?php

if (function_exists('opcache_reset')) {
    opcache_reset();
}
?>
<nav class="navbar navbar-expand-md bg-dark py-3" data-bs-theme="dark">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"><img width="20px"
                        height="20px" src="{{ asset('/img/menu.png') }}" alt="Kit Logo"> </span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                @if(session()->has('username') && session('username') == 'kalanithi')
               
                    <li class="nav-item"><a class="nav-link active" href="adminpanel" style="color:#ffffff8c">Home</a>
                    </li> <li class="nav-item"><a class="nav-link active" href="evaluate" style="color:#ffffff8c">Mark
                            correction</a>
                    </li>
                    @endif
                    @if(session()->has('username'))
                    <li class="nav-item"><a class="nav-link active" href="home" style="color:#ffffff8c">Marks</a></li>
                    <li class="nav-item"><a class="nav-link" href="voteteam" style="color:#ffffff8c">Expo</a></li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="count" style="color:#ffffff8c">Votes</a></li>

                    <li class="nav-item"><a class="nav-link" href="register" style="color:#ffffff8c">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="leader" style="color:#ffffff8c">Leader</a></li>
                    
                </ul>@if(session()->has('username'))<a class="btn btn-primary ms-md-2" role="button" href="logout">Logout</a> @endif
            </div>
        </div>
    </nav>
</body>
</html>