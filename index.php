<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote Start</title>
    <link rel="icon" type="image/jpg" href="images/favicon.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <style>
        h1
        {
            font-family: 'Orbitron', sans-serif;
        }
        legend{
            float: none !important;
            width: 25%;
        }
    </style>
</head>
<body style="background-color: lightgrey;">
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <p style="color: orange; display:inline">ROHRING</p><p style="color: palegreen; display:inline">STARTS</p>
                    <img src="images/logo.png" alt="" style="width: auto; height: 25px; padding-left:.5em;" class="d-inline-block">                        
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#securitySystems">Security Systems</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#remoteStarters">Remote Starts</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <!-- Security DIV -->
        <div>
            <h1 class="text-left mt-3" id="securitySystems">Security Systems</h1>
            <div class="container rounded pt-3 mb-3 bg-white">
                <div class="row">
                    <div class="col-3 text-center">
                        <fieldset class="border border-success mb-3 form-group rounded shadow-lg">
                            <legend class="text-success" style="font-family: Orbitron; font-weight:bold">Good</legend>                
                            <img class="img-fluid" src="images/python_3105P.jpg" alt="Python 3105P">
                            <p style="font-family: 'Orbitron';">Python 3105P | 460 Max</p>
                        </fieldset>                
                    </div>
                    <div class="col-9">                
                        <h3 class="text-center" style="font-family: Orbitron;">1-Way Security System</h3>
                        <div class="text-end" hidden>
                            <button class="btn btn-secondary p-4 text-end" type="button" data-bs-toggle="collapse" data-bs-target="#oneWayDetail" aria-expanded="false" aria-controls="twoWayDetail">
                                Details
                            </button>
                        </div>
                        <div class="mt-3">
                            <p class="text-center" style="font-size: 30px;">Some info about the Python 3105P</p>
                        </div>
                        <div class="collapse" id="oneWayDetail">
                            <div class="card-body">
                                <p style="font-size: 30px;">Some info about the Python 3105P</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container rounded pt-3 mb-3 bg-white">
                <div class="row">
                    <div class="col-3 text-center">
                        <fieldset class="border border-warning mb-3 form-group rounded shadow-lg">
                            <legend class="text-warning" style="font-family: Orbitron; font-weight:bold">Best</legend>                                    
                            <img class="img-fluid" src="images/security.webp" alt="Python 3305P">                
                            <p style="font-family: 'Orbitron';">Python 3305P | Responder 460</p>
                        </fieldset>               
                    </div>
                    <div class="col-9">
                        <h3 class="text-center" style="font-family: Orbitron;">2-Way Security System</h3>
                        <div class="text-end" hidden>
                            <button class="btn btn-secondary p-4" type="button" data-bs-toggle="collapse" data-bs-target="#twoWayDetail" aria-expanded="false" aria-controls="twoWayDetail">
                                Details
                            </button>
                        </div>
                        <div class="mt-3">
                            <p class="text-center" style="font-size: 30px;">Some info about the Python 3305P</p>
                        </div>
                        <div class="collapse" id="twoWayDetail">
                            <div class="card-body">
                                <p style="font-size: 30px;">Some info about the Python 3305P</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Starters DIV -->
        <div>
        <h1 class="text-left" id="remoteStarters">Remote Starters</h1>
            <div class="container rounded pt-3 mb-3 bg-white">
                <div class="row">
                    <div class="col-3 text-center">
                        <fieldset class="border border-success mb-3 form-group rounded shadow-lg">
                            <legend class="text-success" style="font-family: Orbitron; font-weight:bold">Good</legend>                
                            <img class="img-fluid" src="images/4105P.png" alt="Python 3105P">
                            <p style="font-family: 'Orbitron';">Python 4105P</p>
                        </fieldset>                
                    </div>
                    <div class="col-9">                
                        <h3 class="text-center" style="font-family: Orbitron;">1-Way Remote Start System</h3>
                        <div class="text-end" hidden>
                            <button class="btn btn-secondary p-4 text-end" type="button" data-bs-toggle="collapse" data-bs-target="#oneWayDetail" aria-expanded="false" aria-controls="twoWayDetail">
                                Details
                            </button>
                        </div>
                        <div class="mt-3">
                            <p class="text-center" style="font-size: 30px;">Some info about the Python 4105P</p>
                        </div>
                        <div class="collapse" id="oneWayDetail">
                            <div class="card-body">
                                <p style="font-size: 30px;">Some info about the Python 4105P</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container rounded pt-3 mb-3 bg-white">
                <div class="row">
                    <div class="col-3 text-center">
                        <fieldset class="border border-warning mb-3 form-group rounded shadow-lg">
                            <legend class="text-warning" style="font-family: Orbitron; font-weight:bold">Best</legend>                                    
                            <img class="img-fluid" src="images/4806.png" alt="Python 3305P">                
                            <p style="font-family: 'Orbitron';">Python 4806P</p>
                        </fieldset>               
                    </div>
                    <div class="col-9">
                        <h3 class="text-center" style="font-family: Orbitron;">LED 2-Way Remote Start System</h3>
                        <div class="text-end" hidden>
                            <button class="btn btn-secondary p-4" type="button" data-bs-toggle="collapse" data-bs-target="#twoWayDetail" aria-expanded="false" aria-controls="twoWayDetail">
                                Details
                            </button>
                        </div>
                        <div class="mt-3">
                            <p class="text-center" style="font-size: 30px;">Some info about the Python 4806P</p>
                        </div>
                        <div class="collapse" id="twoWayDetail">
                            <div class="card-body">
                                <p style="font-size: 30px;">Some info about the Python 4806P</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>