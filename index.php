<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Countdown timer</title>
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
                        <input type="datetime-local" class="form-control" id="date-and-time" name="date-and-time">
                        <br>
                        <h4><label for="countdown-name">Countdown name</label></h4>
                        <input type="text" class="form-control" id="countdown-name" name="countdown-name" >
                        <br>
                        <input type="submit" id="load-btn" class="btn btn-primary" value="Load"></input>
                    </fieldset>
                    </form>
                </div>
                </div>
            </div>

            <div id="background" class="card col-md-6" >
                <form>
                    <div id="panel" class="card-header text-center"><h3 id="name"></h3></div>
                    <div class="card-body text-center">
                        <h1 id="timer"></h1>
                        <br>
                        <input id="save-btn" class="btn btn-lg btn-success" type="submit" value="Save countdown"></input>
                    </div>
                    <div id="msg" class="alert alert-dismissible alert-danger d-none">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <p class="mb-0"></p>
                    </div>
                </form>              
            </div>

            <div class="card bg-light col-md-3 " >
                <div class="card-body">
                    <h4>Background color:</h4>
                    <div class="color-picker-1"></div>
                    <br>
                    <h4>Name color:</h4>
                    <div class="color-picker-2"></div>
                    <br>
                    <h4>Panel color:</h4>
                    <div class="color-picker-3"></div>
                    <br>
                    <h4>Digits color:</h4>
                    <div class="color-picker-4"></div>
                </div>
                
                </div>
            </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
<script src="js/countDownTimer.js"></script>
<script src="js/functions.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>