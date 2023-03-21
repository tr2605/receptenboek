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
    <title>recept-detail</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
<?php include('header.php'); ?>
    <div>
        <img src="images\<?php echo $recept["foto"] ?>" alt="recept" width="300" height="220">
        <tr></tr>
        <?php echo $recept["titel"] ?>
        <?php echo $recept["duur"] ?>
        <?php echo $recept["ingredienten"] ?>
        <?php echo $recept["menu gang"] ?>
        <?php echo $recept["moeilijkheidsgraad"] ?>
        <?php echo $recept["instructie"] ?>
    </div>
</body>
<?php include('footer.php'); ?>
</html>