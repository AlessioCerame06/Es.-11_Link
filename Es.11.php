<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LINK</title>
    </head>
    <body>
        <?php
            $linkBase = "https://xkcd.com/";
            $numLink = rand (2, 5);
            for ($i = 1; $i <= $numLink; $i++) {
                echo "<a href='$linkBase/$i' target='blank'>Pagina $i</a><br>";
            }

        ?>
        
    </body>
</html>