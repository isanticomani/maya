<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Pruebas Maya</title>
</head>
<body>
    <div class="container">
        <div class="title"><h1>Pruebas</h1></div>
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Funcion que suma o resta dias</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">
                    <pre>
function sumDays($date,$days){
    $elements = explode('-',$date);
    $day = (int) $elements[0];
    $month = (int) $elements[1];
    $year = (int) $elements[2];
    $positive = ($days > 0) ? true : false;

    if ($positive) {
        for ($i=0; $i < $days; $i++) { 
            $bisiesto = checkBisiesto($year);
            if ($day == 31 && $month != 2) {
                $day = 1;
                if($month == 12){
                    $month = 1;
                    $year += 1;
                }else{
                    $month += 1;
                }
            }else if (($day == 28 && $month == 2 && $bisiesto === false) || ($day == 29 && $month == 2 && $bisiesto === true)){
                $day = 1;
                $month += 1;
            }else{
                $day += 1;
            }
        }
    }else{
        for ($i=0; $i > $days; $i--) { 
            $bisiesto = checkBisiesto($year);
            if ($day == 1 && $month != 3) {
                $day = 31;
                if($month == 1){
                    $month = 12;
                    $year -= 1;
                }else{
                    $month -= 1;
                }
            }else if (($day == 1 && $month == 3 && $bisiesto === false) || ($day == 1 && $month == 3 && $bisiesto === true)){
                $day = (!$bisiesto) ? 28 : 29;
                $month -= 1;
            }else{
                $day -= 1;
            }
        }
    }
    echo "Fecha final : $day-$month-$year";
    die;
}
                    </pre>
                </p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
        <div class="card" style="width: 50%;">
            <div class="card-body">
                <h5 class="card-title">Formulario</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
                <form action="sumDays.php" method="POST">
                    <div class="form-group">
                        <label for="inputDate">Fecha de inicio</label>
                        <input type="text" class="form-control" name="inputDate" id="inputDate" aria-describedby="date" placeholder="dd-mm-YY">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="inputDays">Dias para sumar</label>
                        <input type="number" class="form-control" name="inputDays" id="inputDays">
                    </div>
                    <!-- <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Dibujando patron</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
        <div class="card" style="width: 50%;">
            <div class="card-body">
                <h5 class="card-title">Ingrese número</h5>
                <form action="dibuja.php" method="POST">
                    <!-- <div class="form-group"> -->
                        <!-- <label for="inputDate">Fecha de inicio</label> -->
                        <!-- <input type="text" class="form-control" name="inputDate" id="inputDate" aria-describedby="date" placeholder="dd-mm-YY"> -->
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    <!-- </div> -->
                    <div class="form-group">
                        <label for="inputNum">Ingrese numero real positivo</label>
                        <input type="number" step="0.1" class="form-control" name="inputNum" id="inputNum">
                    </div>
                    <!-- <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>