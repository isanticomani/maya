<?php

$number = (float)$_POST['inputNum'];
var_dump($number);

if($number < 0){
    echo "Por favor ingresar un numero positivo";
    die;
}else{
    $draw = "";
    
    ?>
    <pre>
<?php
echo $draw;
?>
    </pre>
    <?php
}
?>