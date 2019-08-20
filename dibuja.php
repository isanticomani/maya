<?php

$number = (float)$_POST['inputNum'];
var_dump($number);

if($number < 0){
    echo "Por favor ingresar un numero positivo";
    die;
}else{
    $draw = "";
    $baseV = 6;
    $completos = floor($number / 1);
    var_dump($completos);
    ?>
    <pre>
<?php
echo $draw;
?>
    </pre>
    <?php
}
?>