<?php

function inloggen() {
    $inloggegevens = array("piet@worldonline.nl", "klaas@carpets.nl", "truushendriks@wegweg.nl");
    $wachtwoordgegevens = array("doetje123", "snoepje777", "arkiearkie201");

    for ($i = 0; $i < 2; $i++) {
        if ($_POST['email'] == $inloggegevens[$i] && $_POST['wachtwoord'] == $wachtwoordgegevens[$i]) {
            return true;
        }
    }
    return false;
}

if (inloggen()) {
    echo "Welkom!";
} else {
    echo "Sorry, U heeft geen toegang!";
}