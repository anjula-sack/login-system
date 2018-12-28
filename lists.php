<?php
$names = ["anjula", "janith", "buddika", "mahinda", "kasun", "prashan"];
$a = $_GET['num'];
if ($a < sizeof($names)){
    echo $names[$a];
} else{
    echo "Invalid Length";
}

