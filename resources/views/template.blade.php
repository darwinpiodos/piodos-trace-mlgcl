<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .mlg-logo{
        width:70px;
        margin-left:20px;
    }

    .logo-container{
        display:flex;
        align-items:center;
        margin-top:3px;
        margin-bottom:3px;
    }
    .logo-text{
        display:flex;
        flex-direction:column;
        padding:0px;
        margin-left:13px;
        

    }
    .navbar-brand{
        padding:0px;
        color:white;
    }
    .logo-text .navbar-brand{
        padding:0px;
        color:white;
        font-size:20px;
    }
    .logo-text .mlgcl-fs{
        font-size:40px;
    }
    .logo-text .navbar-brand:hover{
        color:whitesmoke;
    }
    .nav-item .links-right{
        color:white;
        text-decoration:none;
        margin-left:15px;
        font-size:20px;
    }

    .navbar-nav{
        position:absolute;
        right:40px;
    }
    .bg-success{


        box-shadow:1px 1px 10px #9d9d9e;
    }
</style>
</head>
<body>




<div class="container-fluid px-0">


        <nav class="navbar navbar-expand-lg navbar-light bg-success my-0">
        <div class="container-fluid">

            <div class="logo-container">
                
                <img src="image/mlg-logo.png" class="mlg-logo">

                <div class="logo-text">

                    <a class="navbar-brand mlgcl-fs" href="#">MLGCL</a>
                    <a class="navbar-brand" href="#">COVID-19 CONTACT TRACING SYSTEM</a>

                </div>

            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">


            @if (Route::has('login'))
            <ul class="navbar-nav">

                @auth
                <li class="nav-item">
                                <a href="{{ url('/home') }}" class="links-right">Home</a>
                </li>
                @else

                <li class="nav-item">
                <a href="{{ route('login') }}" class="links-right">Login</a>             
               </li>

               @if (Route::has('register'))

                <li class="nav-item">
                <a href="{{ route('register') }}" class="links-right">Register</a>                </li>


                @endif
                @endauth

            </ul>
            @endif

            </div>
        </div>
        </nav>


<!-- 

        <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif -->




</div>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>