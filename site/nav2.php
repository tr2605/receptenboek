<div class="topnav">
    <h1><?php echo $recept["titel"] ?></h1>
    <a class="imger">
        <a href="recept.php">Home</a>
        <?php foreach ($all_recepten as $recept) : ?>
            <a href="recepten.php?nummer=<?php echo $recept["nummer"] ?>"><?php echo $recept["titel"] ?></a>
        <?php endforeach; ?>
        <a href="specials.php">Specials</a>
</div>
</div>
</div>