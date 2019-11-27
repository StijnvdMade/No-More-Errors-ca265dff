<?php
$input = $argv[1];
$input = aardappelpasta($input);
$wisselgeld = array(50, 20, 10, 5, 2 , 1 , 0.5, 0.2, 0.1, 0.05);
foreach ($wisselgeld as $moela) {
    $amount = floor($input/$moela);
    if ($amount != 0) {
        $input -=($amount * $moela);
        if ($moela >= 1){ 
            echo "\n $amount x  $moela euro ";
        }
        else{
            $moela*=100;
            echo "\n $amount x $moela cent";
        }
    }
}
function aardappelpasta($pingpongwegjong){
    return round($pingpongwegjong/0.05)*0.05;   
}
?>