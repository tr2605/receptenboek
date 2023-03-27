<div class="topnav">
    <h1>Recepten van de portugese keuken</h1>
    <a class="imger">
        <a href="recept.php">Home</a>
        <?php foreach ($all_recepten as $recept) : ?>
            <a href="recepten.php?nummer=<?php echo $recept["nummer"] ?>"><?php echo $recept["titel"] ?></a>
            <a href="specials.php">Specials</a>
        <?php endforeach; ?>
</div>
</div>