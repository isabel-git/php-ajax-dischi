<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    require_once 'data.php';
    // var_dump($database); die();
?>

<style>
    .container{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .box{
        border: 1px solid;
        width: 200px; min-height: 300px;
        padding: 30px;
        text-align: center;
    }
    img{
        display: block;
        height: 200px;
    }
</style>
<body>

<!-- Basandosi sui dati in allegato, sviluppare front-end e back-end nelle due varianti come visto questa mattina:
- stampa integrale in PHP attraverso l'include -->

<div class="container">

    <?php
        for ($i=0; $i < count($database) ; $i++) { 
            $album = $database[$i];
            ?>

            <div class="box">
                <?php
                    echo '<img src="' . $album['poster'] . '"'; //immagine
                    echo '<p>' . $album['title'] . '</p>'; //titolo
                    echo '<p>' . $album['author'] . '</p>'; //autore
                    echo '<p>' . $album['year'] . '</p>'; //anno
                ?>
            </div>

            <?php
        }
    ?>

</div>
    
</body>
</html>