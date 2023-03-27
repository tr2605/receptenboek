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
    <h3>Recept dat het langst duurt om te maken: Bacalhau</h3>
    <p>15 uur 30 min</p>

    <table class="table2">
        <h3>gerechten gesoorteerd op moeilijkheidsgraad
            <tr>
                <th> Pastel de nata - makkelijk/middel</th><br>
                <th> Francesinha - makkelijk/middel</th>
                <th> Cataplana de Marisco - middel</th>
                <th> Port - middel/geadvanceerd </th>
                <th> Bacalhau - geadvanceerd </th>
            </tr>
    </table>








</body>
<?php include('footer.php'); ?>

</html>