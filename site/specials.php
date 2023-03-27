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
    <title>Specials</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<?php include('header.php'); ?>
<?php include('nav3.php'); ?>

<body class="body-special">
<?php
$sql = "SELECT * FROM receptenboek ORDER BY duur DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

//display het gerecht in table
if (mysqli_num_rows($result) > 0) {
  echo "<table><tr><th>titel</th><th>duur</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["titel"] . "</td><td>" . $row["duur"] . " minuten</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>







    </h2>
</body>
<?php include('footer.php'); ?>

</html>