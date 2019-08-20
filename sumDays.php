<?php

    $date = $_POST['inputDate'];
    $days = $_POST['inputDays'];

    
    if (validDate($date)) {
        sumDays($date,$days);
    }
    
    function validDate($date){
        $pos = strpos($date,'-');
        // var_dump($pos);
        if ($pos === false) {
            echo 'Formato de fecha no valido ingrese una fecha con formato dd-mm-YY (01-01-2019)';
            die;
        }
        return true;
    }
    
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
                }
                else{
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
                }
                else{
                    $day -= 1;
                }
            }
        }
        echo "Fecha final : $day-$month-$year";
        die;
    }

    function checkBisiesto($year){
        if (($year % 400 == 0 || $year % 4 == 0) && $year % 100 != 0 ) {
            return true;
        }else{
            return false;
        }
    }