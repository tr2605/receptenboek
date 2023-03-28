<?php
require 'database.php';
$sql = "SELECT * FROM database_receptenboek";
$result = mysqli_query($conn, $sql);
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>receptenboek</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body class="body-index">

    <?php include('header.php'); ?>
    <?php include('nav.php'); ?>

    <div class=container>
        <div class=container_width>
            <div class="row">
                <div class="box">
                    <?php foreach ($all_recepten as $recept) : ?>
                        <a href="recepten.php?nummer=<?php echo $recept["nummer"] ?>">
                            <img class="image 2" src="images\<?php echo $recept["foto"] ?>" alt="recept" width="300" height="220" ;>
                            <div class="titel-recept">
                                <h3><?php echo $recept["titel"] ?></h3>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="specials">
        <h3>Aantal recepten:<?php echo $recept["nummer"] ?></h3>
    </div>
</body>
<?php include('footer.php'); ?>

</html>