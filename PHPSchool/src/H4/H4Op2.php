<?php

function gedeelddoor3() {
    $getal = 15;
    if($getal % 3 == 0) {
        echo $getal.' / 3 = true';
    }
    else {
        echo $getal.' / 3 = false';
    }
}

echo gedeelddoor3();
