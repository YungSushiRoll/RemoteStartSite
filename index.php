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
        html {
            scroll-padding-top: 1em; /* height of sticky header */
        } 
    </style>
</head>
<body style="background-color: lightgrey;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand pb-0" href="#">
                    <!-- <p style="color: orange; display:inline; font-size: 2em;">ROHRING</p><p style="color: palegreen; display:inline; font-size: 2em;">STARTS</p> -->
                    <img src="images/MIID.png" alt="" style="width: auto; height: 4em;" class="mb-3 img-fluid">                        
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-5 fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Systems
                        </a>
                        <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#securitySystems">Security Systems</a></li>
                            <li><a class="dropdown-item" href="#remoteStarters">Remote Starts</a></li>
                            <li><a class="dropdown-item" href="#securityRemoteStart">Security and Remote Starts</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-5">|</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active fs-5 fw-bold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold" href="#securitySystems">Security Systems</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold" href="#remoteStarters">Remote Starts</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold" href="#securityRemoteStart">Security and Remote Starts</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="text-center">
            <img src="images/rm_banner2.png" alt="" class="shadow-lg w-100">
        </div>
        
    <div class="container">
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
                        <div class="row">
                            <h3 class="text-center" style="font-family: Orbitron; font-weight:bold;">1-Way Security System</h3>
                            <div class="mt-3">
                                <p style="font-size: 25px; font-family: Orbitron;">
                                    An entry level security system that controls: lock/unlock, trunk pop, 
                                    and monitors all door statuses for signs of entry.<br> 
                                    Includes starter kill, shock sensor and a six tone siren.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <button style="font-family: Orbitron;" class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#oneWayDetail" aria-expanded="false" aria-controls="oneWayDetail">
                                    &darr; KEY FEATURES AND SPECIFICATIONS &darr;
                                </button>
                            </div>
                            <div class="collapse" id="oneWayDetail">
                                <div class="card-body">
                                    <ul>
                                        <li>Clone-Safe® Code-Hopping®</li>
                                        <li>Stinger® DoubleGuard® Shock Sensor</li>
                                        <li>Revenger® 6-tone Siren</li>
                                        <li>2 Auxiliary Outputs</li>
                                        <li>Security/keyless entry system</li>
                                        <li>Up to 1/4 mile range*</li>
                                        <li>Includes two 1-Way remotes</li>
                                        <li>Directed® SmartStart Compatible**</li>
                                    </ul>
                                    <p>*Range based on line-of-sight unobstructed testing under ideal conditions. 
                                        Actual range will vary due to local conditions including, but not limited to, 
                                        environment, terrain, physical obstructions, vehicle location and orientation, 
                                        interference and other possible impediments.<br>
                                        **Smartphone sold separately<br>
                                        ***Additional parts and labor may be required</p>
                                </div>
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
                        
                        <div class="row">
                            <h3 class="text-center" style="font-family: Orbitron; font-weight: bold;">2-Way Security System</h3>
                            <div class="mt-3">
                                <p style="font-size: 25px; font-family: Orbitron;">
                                    A security system that controls: lock/unlock, trunk pop, 
                                    and monitors all door statuses for signs of entry with improved range up to 2,000 feet away 
                                    and 2 way remote that shows the current status of your vehicle.<br> 
                                    Includes starter kill, shock sensor and a six tone siren.
                                </p>
                            </div>
                        </div>
                        
                        <div class="row">

                            <div>
                                <button style="font-family: Orbitron;" class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#twoWayDetail" aria-expanded="false" aria-controls="twoWayDetail">
                                    &darr; KEY FEATURES AND SPECIFICATIONS &darr;
                                </button>                                
                            </div>

                            <div class="collapse" id="twoWayDetail">
                                <div class="card-body">
                                    <ul>
                                        <li>Security and keyless entry system</li>
                                        <li>Clone-Safe® Code-Hopping®</li>
                                        <li>Stinger® DoubleGuard® Shock Sensor</li>
                                        <li>Revenger® 6-tone Siren</li>
                                        <li>2 Auxiliary Outputs</li>
                                        <li>Up to 1/4 mile range*</li>
                                        <li>Includes 1-Way companion remote</li>
                                        <li>Directed® SmartStart Compatible**</li>
                                    </ul>
                                    <p>*Range based on line-of-sight unobstructed testing under ideal conditions. 
                                        Actual range will vary due to local conditions including, but not limited to, 
                                        environment, terrain, physical obstructions, vehicle location and orientation, 
                                        interference and other possible impediments.<br>
                                        **Smartphone sold separately<br>
                                        ***Additional parts and labor may be required</p>
                                </div>
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
                            <img class="img-fluid" src="images/4105P.png" alt="Python 4105P">
                            <p style="font-family: 'Orbitron';">Python 4105P</p>
                        </fieldset>   
                                     
                    </div>

                    <div class="col-9">
                        
                            <div class="row">
                                <h3 class="text-center" style="font-family: Orbitron; font-weight:bold;">1-Way Remote Start System</h3>
                                <div class="mt-3">
                                    <p style="font-size: 30px; font-family: Orbitron;">  
                                        1-Way Remote car starting system with trunk pop, lock / unlock features.*
                                    </p>
                                    <p style="font-size: 15px;">
                                    *** One way remote starters do not communicate back to the individual starting the vehicle. ***
                                    </p>
                                </div>
                            </div>

                            <div class="row">

                                <div>  
                                    <button style="font-family: Orbitron;" class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#oneWayRemote" aria-expanded="false" aria-controls="oneWayRemote">
                                        &darr; KEY FEATURES AND SPECIFICATIONS &darr;
                                    </button>                                
                                </div>

                                <div class="collapse" id="oneWayRemote">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                Up to 1/4 mile range*
                                            </li>
                                            <li>
                                                Auxiliary channel
                                            </li>
                                            <li>
                                                Horn Honk***
                                            </li>
                                            <li>
                                                Includes two 1-Way remotes
                                            </li>
                                            <li>
                                                Directed® SmartStart Compatible**
                                            </li>
                                            <li>
                                                Separate ESP2 and D2D ports                                         
                                            </li>
                                            <li>
                                                Onboard remote start relays   
                                            </li>
                                        </ul>
                                        <p>*Range based on line-of-sight unobstructed testing under ideal conditions. 
                                            Actual range will vary due to local conditions including, but not limited to, 
                                            environment, terrain, physical obstructions, vehicle location and orientation, 
                                            interference and other possible impediments.<br>
                                            **Smartphone sold separately<br>
                                            ***Additional parts and labor may be required</p>
                                    </div>
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
                        <div class="row">
                            <h3 class="text-center" style="font-family: Orbitron; font-weight:bold;">LED 2-Way Remote Start System</h3>
                            <div class="mt-3">
                                <p style="font-size: 30px; font-family: Orbitron;">
                                    2-way* Remote car starting system with lock / unlock and trunk 
                                    pop features.
                                </p>
                                <p class="font-size: 15px;">
                                *** 2-way allows for communication back to indiviual that car has started. ***
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <button style="font-family: Orbitron;" class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#twoWayRemote" aria-expanded="false" aria-controls="twoWayRemote">
                                    &darr; KEY FEATURES AND SPECIFICATIONS &darr;
                                </button>
                            </div>
                            
                            <div class="collapse" id="twoWayRemote">
                                <div class="card-body">
                                    <ul>
                                        <li>4 auxiliary channels</li>
                                        <li>LED command confirmation</li>
                                        <li>Horn Honk***</li>
                                        <li>Includes 1-Way companion remote</li>
                                        <li>Rechargeable battery</li>
                                        <li>Directed® SmartStart Compatible**</li>
                                        <li>Flex relay and selectable light flash polarity***</li>
                                        <li>Manual transmission compatible***</li>
                                        <li>Up to one mile range*</li>
                                        <li>Separate ESP2 and D2D ports</li>
                                        <li>Onboard remote start relays</li>
                                    </ul>
                                    <p>*Range based on line-of-sight unobstructed testing under ideal conditions. 
                                        Actual range will vary due to local conditions including, but not limited to, 
                                        environment, terrain, physical obstructions, vehicle location and orientation, 
                                        interference and other possible impediments.<br>
                                        **Smartphone sold separately<br>
                                        ***Additional parts and labor may be required</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Secuirty & Starters DIV -->
        <div>
            <h1 class="text-left" id="securityRemoteStart">Security with Remote Starter</h1>
            <div class="container rounded pt-3 mb-3 bg-white">
                <div class="row">
                    <div class="col-3 text-center">
                        <fieldset class="border border-warning mb-3 form-group rounded shadow-lg">
                            <legend class="text-warning" style="font-family: Orbitron; font-weight:bold">Best</legend>                
                            <img class="img-fluid" src="images/5706P.png" alt="Python 5706P">
                            <p style="font-family: 'Orbitron';">Python 5706P</p>
                        </fieldset>                
                    </div>
                    <div class="col-9">
                        
                        <div class="row">
                            <h3 class="text-center" style="font-family: Orbitron; font-weight:bold;">LCD 2-Way Security and Remote Start System</h3>
                            <div class="mt-3">
                                <p style="font-size: 30px; font-family: Orbitron;">
                                    LCD 2-Way Security and Remote Car Start System with lock / unlock and trunk 
                                    pop features*
                                </p>
                                <p class="font-size: 15px;">
                                *** 2-way remote control with liquid-crystal display and one 5-button 1-way remote control. ***
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div>
                                <button style="font-family: Orbitron;" class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#combo" aria-expanded="false" aria-controls="combo">
                                    &darr; KEY FEATURES AND SPECIFICATIONS &darr;
                                </button>
                            </div>
                            
                            <div class="collapse" id="combo">
                                <div class="card-body">
                                    <ul>
                                        <li>Stinger® DoubleGuard® Shock Sensor</li>
                                        <li>Revenger® 6-tone Siren</li>
                                        <li>4 auxiliary channels</li>
                                        <li>Horn Honk***</li>
                                        <li>Includes 1-Way companion remote</li>
                                        <li>Up to one mile range*</li>
                                        <li>Rechargeable battery</li>
                                        <li>Directed® SmartStart Compatible**</li>
                                        <li>Flex relay and selectable light flash polarity***</li>
                                        <li>Manual transmission compatible***</li>
                                        <li>Separate ESP2 and D2D ports</li>
                                        <li>Priority Icon map with LCD display</li>
                                        <li>Onboard remote start relays</li>
                                    </ul>
                                    <p>*Range based on line-of-sight unobstructed testing under ideal conditions. 
                                        Actual range will vary due to local conditions including, but not limited to, 
                                        environment, terrain, physical obstructions, vehicle location and orientation, 
                                        interference and other possible impediments.<br>
                                        **Smartphone sold separately<br>
                                        ***Additional parts and labor may be required</p>
                                </div>
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