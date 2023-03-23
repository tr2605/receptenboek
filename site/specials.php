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

<body class="body-special">

    <h2>Het gerecht dat het langst duurt om te maken: Bacalhao</h2><br>
    <h2>Gerechten gesorteert op moeilijkheidsgraad: 
        <table>
            <tr>
                <th>Francesinha<br>makkelijk/middel  _</th>
                <th>Pastel de nata<br>makkelijk/middel  _</th>
                <th>Cataplana de Marisco <br>middel_</th>
                <th>Port<br>middel/geadvanceerd_</th>
                <th>Bacalhau<br>geadvanceerd_</th>
            </tr>
        </table>








    </h2>
</body>
<?php include('footer.php'); ?>

</html>