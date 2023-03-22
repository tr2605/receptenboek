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
    <?php include('header2.php'); ?>
    <div>
        <div class=image>
            <img src="images\<?php echo $recept["foto"] ?>" alt="recept" width="540" height="400">
        </div>
        <h1><?php echo $recept["titel"] ?></h1>
        <h3>Tijdsduur: <?php echo $recept["duur"] ?></h3>
        <h3>Moeilijkheidsgraad: <?php echo $recept["moeilijkheidsgraad"] ?></h3>
        <h3>Menu gang: <?php echo $recept["menu gang"] ?>gerecht</h3>
        <ul>
            <h3>Ingredienten:</h3>
            <?php
            $ingredienten = explode(",", $recept["ingredienten"]);

            foreach ($ingredienten as $ingredient) {
                echo "<li>" . trim($ingredient) . "</li>";
            }
            ?>
        </ul>
    </div>
    <h3>instructie op hoe te maken:</h3>
    <?php
    $ingredienten = explode(".", $recept["instructie"]);

    foreach ($ingredienten as $ingredient) {
        echo "<li>" . trim($ingredient) . "</li>";
    }
    ?>
    <div class="nummer">
        <h3>Nummer recept:<?php echo $recept["nummer"] ?></h3>
    </div>
    </div>
</body>
<?php include('footer2.php'); ?>

</html>