<?php
$ingredients = ["Dough "," cheese "," pepperoni "];
$steps =["make dough into a circle", "put cheese and pepperoni on", "put in oven at 425 for 20 minutes"];
$title = "my recipe"


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title><?= $title ?></title>
</head>
<body>
    <main>
        <h1><?= $title ?></h1>
        <h2>"ingredients"</h2>
        <div>
            <ul>
                <?php 
                    foreach ($ingredients as $ingredient){
                        echo "<li>{$ingredient}</li>";
                    }
                ?>
            </ul>
        </div>
        <h2>Steps</h2>
        <div>
            <ol>
                <?php
                    foreach($steps as $step){
                        echo "<li>{$step}</li>";
                    }
                ?>
            </ol>
        </div>
    </main>
    
</body>
</html>