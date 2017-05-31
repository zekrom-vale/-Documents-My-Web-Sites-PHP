<?php
    $type= "PHP";
    $x = 644;
    $X = NULL;
    $y = 1000;
    $h = 0xFF;
    include "_Main.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>index</title>
    </head>
    <body>
        <a href="second.php">Next</a>
        <h1>
            <?php
                echo "My first $type script!";
                eCHo "<br/>";// dont forget ;
                EcHO "$type";
                echo $x;
            ?>
        </h1>
        <?php
            echo "This is ". $type. "!";
            echo $x - $y;//$x and $y is not typed by the user
        ?>
        <br/>
        <?php
            function test(){
                global $x;// missing the ; a lot!
                echo 'Global'," var needs to", " be set up with global ";
                print $x + $GLOBALS['y'];
            }
            test();
        ?>
        <br/>
        <?php
            echo "0xFF= $h", "<br/>";
            var_dump($h);
        ?>
    </body>
</html>
