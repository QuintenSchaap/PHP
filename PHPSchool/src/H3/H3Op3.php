<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H3 Opdracht 3 PHP</title>
    <style>
        body {
            text-align: center;
        }
        .rood {
            border: solid red 5px;
        }
        .groen {
            border: solid green 5px;
        }
    </style>
</head>
<body>
<?php
for($i = 1; $i <= 9; $i++){
    if($i % 2 == 0){
        $class = "class= 'rood'";
    } else {
        $class = "class= 'groen'";
    }
    echo "<img " .$class. "src= 'img/aap/aap".$i.".jpg'>";
}
?>
</body>
</html>