<?php
require 'database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specials</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<?php include('header.php'); ?>
<?php include('nav3.php'); ?>

<body class="body-special">
<?php
require 'database.php';
$sql = "SELECT titel FROM database_receptenboek ORDER BY duur DESC LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output title with longest duration
  $row = mysqli_fetch_assoc($result);
  echo "gerecht dat het langst duur te maken: " . $row["titel"];
} else {
  echo "No data found";
}
?>
<br>
<?php
$sql = "SELECT titel FROM database_receptenboek ORDER BY moeilijkheidsgraad DESC LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output title with highest moeilijkheidsgraad
  $row = mysqli_fetch_assoc($result);
  echo "het gerecht met de hoogste moeilijkheidsgraad is: " . $row["titel"];
} else {
  echo "No data found";
}
?>
<br>
<?php
$sql = "SELECT titel FROM database_receptenboek ORDER BY LENGTH(ingredienten) DESC LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output title with longest ingredienten text
  $row = mysqli_fetch_assoc($result);
  echo "het recept met de meeste ingredienten is: " . $row["titel"];
} else {
  echo "No data found";
}
?>
</body>
<?php include('footer.php'); ?>

</html>