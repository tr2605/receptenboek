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
<?php include('header3.php'); ?>
<body class="body-index">
    
</body>
<?php include('footer.php'); ?>
</html>