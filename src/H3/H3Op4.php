<?php
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H3 Opdracht 3 PHP</title>
</head>
<body>
<?php
$leeftijd = 12;
$bedrag = 10;
if($leeftijd > 65){
    $bedrag = $bedrag * 0.5;
    echo 'Uw korting is 50%<br>';
}
if($leeftijd <= 12){
    if($leeftijd >= 3) {
        $bedrag = $bedrag * 0.5;
        echo 'Uw korting is 50%<br>';
    }
}
if($leeftijd < 3){
    $bedrag = 0;
    echo 'Uw korting is 100%<br>';
}
echo 'Het bedrag = '.$bedrag.',-';
echo '<br> Leeftijd = '.$leeftijd.' jaar';
?>
</body>
    </html>
