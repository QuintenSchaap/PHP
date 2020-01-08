<?php

function inloggen() {
    $inlog = array("piet@worldonline.nl", "klaas@carpets.nl", "truushendriks@wegweg.nl");
    $wachtwoord = array("doetje123", "snoepje777", "arkiearkie201");

    for ($i = 0; $i < 2; $i++) {
        if ($_POST['email'] == $inlog[$i] && $_POST['wachtwoord'] == $wachtwoord[$i]) {
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