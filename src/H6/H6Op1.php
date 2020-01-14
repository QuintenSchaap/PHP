<?php

$host = 'localhost';
$port = "3306";
$user = 'root';
$pass = '';
$db = 'phpschool';

$dbh =  new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);

foreach($dbh->query('SELECT * from cursist') as $row) {
    print_r($row);
    echo '<br>';
}
