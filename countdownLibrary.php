<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Countdown library</title>
</head>
<body>
<div class="container-fluid container-expand-lg container-dark bg-primary text-center">
        <h2>Countdown Library</h2>
        <h4 >Search countdowns</h4>
    </div>
    <div class="container" id="container">

    <div class="btn-group dropdown">
        <button onclick="showCountdowns(data, 'ongoing')" class="btn btn-lg btn-success dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Countdowns</button>
        <div class="dropdown-menu" >
            <ul id="ongoing-countdowns">
            </ul>
          </div>
        
    </div>

    <div class="btn-group dropdown">
        <button onclick="showCountdowns(data, 'expired')" class="btn btn-lg btn-danger dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Expired Countdowns</button>
        <div class="dropdown-menu" >
            <ul id="expired-countdowns">
            </ul>
          </div>
        
    </div>
    
    </div>

<script src="js/getCountdown.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>