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
</head><?php
require 'database.php';
$sql = "SELECT * FROM database_receptenboek";
$result = mysqli_query($conn, $sql);
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php include('header.php'); ?>
<?php include('nav.php'); ?>
<h1>Specials</h1>
<body class="body-special">
    <div class="specials">
        
<?php
require 'database.php';
$sql = "SELECT titel FROM database_receptenboek ORDER BY duur DESC LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output title with longest duration
  $row = mysqli_fetch_assoc($result);
  echo "Gerecht dat het langst duurt om te maken: " . $row["titel"];
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
  echo "Het gerecht met de hoogste moeilijkheidsgraad is: " . $row["titel"];
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
  echo "Het recept met de meeste ingredienten is: " . $row["titel"];
} else {
  echo "No data found";
}
?>
    </div>
</body>
<?php include('footer2.php'); ?>

</html>