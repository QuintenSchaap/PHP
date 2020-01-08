<?php

if($_POST['voornaam'] == "") {
    echo "Je moet jouw Voornaam nog invoeren!";
    echo "<br><a href=\"H5Op1.html\">Terug naar het formulier</a><br><br>";
};

if($_POST['adres'] == "") {
    echo "Je moet jouw Adres nog invoeren!";
    echo "<br><a href=\"H5Op1.html\">Terug naar het formulier</a><br><br>";
};

if($_POST['email'] == "") {
    echo "Je moet jouw Email nog invoeren!";
    echo "<br><a href=\"H5Op1.html\">Terug naar het formulier</a><br><br>";
};

if($_POST['wachtwoord'] == "") {
    echo "Je moet jouw Wachtwoord nog invoeren!";
    echo "<br><a href=\"H5Op1.html\">Terug naar het formulier</a><br><br>";
};

echo "Voornaam = ".$_POST['voornaam']."<br>";
echo "Adres = ".$_POST['adres']."<br>";
echo "Email = ".$_POST['email']."<br>";
echo "Wachtwoord = ".$_POST['wachtwoord']."<br>";