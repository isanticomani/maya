<?php

$number = (float)$_POST['inputNum'];
var_dump($number);

if($number < 0){
    echo "Por favor ingresar un numero positivo";
    die;
}else{
    $draw = "";
    $h = 9;
    $v = 5;
    for ($j=0; $j <= $v; $j++) { 
        for ($i=0; $i <= $h * $number; $i++) { 
            var_dump("j -> $j");
            var_dump("i -> $i");
            if ($j == 0 && $i == 0) {
                $draw .= " ";
            }else if ($j == 0 && $i == $h * $number) {
                $draw .= "\n";
            }else if ($j == 0 && $i > 0) {
                $draw .= "_";
            }else if ($j == 0 && $i == $h * $number) {
                $draw .= "\n";
            }else if ($j > 0 && $i == 0) {
                $draw .= "|";
            }else if ($j > 0 && $j < $v && $i < $h * $number) {
                $draw .= " ";
            }else if ($j > 0 && $i == $h * $number) {
                $draw .= "|\n";
            }else if ($j == $v && $i > 0) {
                $draw .= "_";
            }
            ?>
<pre>
<?php
echo $draw;
?>
</pre>
            <?php
        }
    }
}
?>