<?php

$pass = 4;

$resultado = random_bytes($pass);
$resultado_final = bin2hex($resultado);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>| Password |</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/import.css">
        <link rel="stylesheet" href="css/redirect.css">
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="main-container">
                            <div class="box-container">
                                <h1>Password Generator</h1>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="box-text">
                                            <?php
                                                echo "<p>$resultado_final</p>";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-center">
                                    <form action="index.php" method="POST">
                                        <input type="submit" value="back to generator">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>