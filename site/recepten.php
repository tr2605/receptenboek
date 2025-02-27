<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require 'database.php';
    $id  = $_GET['nummer'];
    $sql = "SELECT * FROM database_receptenboek WHERE nummer = $id";
    $result = mysqli_query($conn, $sql);
    $recept = mysqli_fetch_assoc($result);
    $all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);?>
    <title><?php echo $recept["titel"] ?></title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body class="body-detail">
    <div><?php
            require 'database.php';
            $sql = "SELECT * FROM database_receptenboek";
            $result = mysqli_query($conn, $sql);
            $all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>
        <?php include('header.php'); ?>
        <?php include('nav.php'); ?>

    </div>
    <?php
    require 'database.php';
    $id  = $_GET['nummer'];
    $sql = "SELECT * FROM database_receptenboek WHERE nummer = $id";
    $result = mysqli_query($conn, $sql);
    $recept = mysqli_fetch_assoc($result);
    $all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    <div>
        <div class=image>
            <div class="box">
                <img src="images\<?php echo $recept["foto"] ?>" alt="recept" width="540" height="400">
            </div>
        </div>
        <div class="text-col">
            <h1><?php echo $recept["titel"] ?></h1>
            <h3>Tijdsduur: <?php echo $recept["duur"] ?></h3>
            <h3>Moeilijkheidsgraad: <?php echo $recept["moeilijkheidsgraad"] ?></h3>
            <h3>Menu gang: <?php echo $recept["menu gang"] ?>gerecht</h3>

            <ul>
                <h2>Ingredienten:</h2>
                <div class="explo">

                    <?php
                    $ingredienten = explode(",", $recept["ingredienten"]);
                    foreach ($ingredienten as $ingredient) {
                        echo "<li>" . trim($ingredient) . "</li>";
                    }
                    ?>
            </ul>

            <ul>
                <h2>instructie over hoe te maken:</h2>
                <div class="explo">

                    <?php
                    $ingredienten = explode(".", $recept["instructie"]);
                    foreach ($ingredienten as $ingredient) {
                        echo "<li>" . trim($ingredient) . "</li>";
                    }
                    ?>
            </ul>

            <div class="nummer">
                <h3>Nummer recept:<?php echo $recept["nummer"] ?></h3>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
<?php include('footer1.php'); ?>

</html>