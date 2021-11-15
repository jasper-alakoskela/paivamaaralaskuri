<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Päivämäärälaskuri</title>
</head>
<body>
    <div class="container-fluid container-expand-lg container-dark bg-primary text-center">
        <h2>Päivämäärälaskuri</h2>
        <h4>Luo oma lähtölaskenta mihin tahansa päivään</h4>
    </div>
    
    <div class="container">

        <div class="row">
            <div class="card bg-light col-md-3 " >
                
                <div class="card-body">
                <div class="form-group">
                    <form name="count-down" method="GET">
                    </fieldset>
                        <label for="date-and-time">Valitse aloitus aika</label>
                        <input type="datetime-local" class="form-control" id="date-and-time" name="date-and-time">
                        <br>
                        <button type="submit" class="btn btn-primary">Tallenna</button>
                    </fieldset>
                    </form>
                </div>
                </div>
            </div>

            <div class="card bg-light col-md-6" >
                <div class="card-header text-center"><h3>Lähtölaskenta</h3></div>
                <div class="card-body text-center">
                    <h1 id="timer"></h1>
                    
                </div>
            </div>

            <div class="card bg-light col-md-3 " >
                
                <div class="card-body">
                    
                </div>
            </div>
        </div>

    </div>

<script src="js/countDownTimer.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>