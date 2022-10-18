<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>PHP DISCHI</title>
</head>
<body>

<?php 
  include __DIR__ . '/db-logic.php';
 

?>


<header>
    <form action="./index.php" method="get">
         <input type="text" name="filter" value="<?= $filter ?>" />
         <input type="submit" value="Cerca">
    </form>
   
</header>


<main class="container">
    <div class="album-container">
        <?php
 
        // var_dump($database);

        foreach($database as $album){
?>
        <div>
            <?php
                include __DIR__ . '/card-album.php'

            ?>
        </div>
<?php
        }
        ?>
    </div>
</main>



</body>
</html>