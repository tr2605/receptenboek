<div class="topnav">
    
    <h1>Recepten van de portugese keuken</h1>
    <class="imger">
        <div class="navver">
        <a href="recept.php">Home</a>
        <?php foreach ($all_recepten as $recept) : ?>
            <a href="recepten.php?nummer=<?php echo $recept["nummer"] ?>"><?php echo $recept["titel"] ?></a>
        <?php endforeach; ?>
        <a href="specials.php">Specials</a>
        
            <?php
            $sql = "SELECT COUNT(*) as total_numbers FROM database_receptenboek WHERE nummer REGEXP '^[0-9]+$'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "Totaal aantal gerechten: " . $row["total_numbers"];
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            ?>
        </div>
</div>
</div>