<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Päivämäärälaskuri</title>
</head>
<body>
    <div class="container-fluid container-expand-lg container-dark bg-primary text-center">
        <h2>Countdown Timer</h2>
        <h4 >Create your own countdown</h4>
    </div>
    
    <div class="container">

        <div class="row">
            <div class="card bg-light col-md-3 " >
                
                <div class="card-body">
                <div class="form-group">
                    <form name="count-down" method="GET">
                    </fieldset>
                        <h4><label for="date-and-time">Select date and time</label></h4>
                        <input type="datetime-local" class="form-control" id="date-and-time" name="date-and-time" >
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </fieldset>
                    </form>
                </div>
                </div>
            </div>

            <div id="background" class="card col-md-6" >
                <div id="panel" class="card-header text-center"><h3 id="name">Countdown</h3></div>
                <div class="card-body text-center">
                    <h1 id="timer"></h1>
                </div>
            </div>

            <div class="card bg-light col-md-3 " >
                <div class="card-body">
                    <h4>Background:</h4>
                    <div class="color-picker-1"></div>
                    <br>
                    <h4>Name:</h4>
                    <div class="color-picker-2"></div>
                    <br>
                    <h4>Panel:</h4>
                    <div class="color-picker-3"></div>
                    <br>
                    <h4>Digits:</h4>
                    <div class="color-picker-4"></div>
                </div>
                
                </div>
            </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
<script src="js/countDownTimer.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>