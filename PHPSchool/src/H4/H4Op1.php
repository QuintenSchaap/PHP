<?php

function berekening($c) {
   $f = $c * 1.8 + 32;
   return $c." Graden Celsius = ".$f." Graden Fahrenheit";
}

echo berekening(-10);