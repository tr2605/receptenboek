<?php
require 'database.php';
$id  = $_GET['nummer'];
$sql = "SELECT * FROM database_receptenboek WHERE nummer = $id";
$result = mysqli_query($conn, $sql);
$recept = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $recept["titel"] ?></title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body class="body-detail">
    <?php include('header.php'); ?>
    <?php include('nav2.php'); ?>
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
                <h3>Ingredienten:</h3>
                <div class="explo">
                    <?php
                    $ingredienten = explode(",", $recept["ingredienten"]);
                    foreach ($ingredienten as $ingredient) {
                        echo "<li>" . trim($ingredient) . "</li>";
                    }
                    ?>
            </ul>

            <ul>
                <h3>instructie over hoe te maken:</h3>
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
<?php include('footer2.php'); ?>

</html>