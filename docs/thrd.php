<?php
    $Pkm= array("Zekrom", "Black Kyrume", "Rayquasa", "Giritina", "many many more!");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>third</title>
    </head>
    <body>
        <?php
            include 'info.html';//Could be many formats, like php, txt, ect.
        ?>
        <a href="second.php">Prev</a>
        <a href="forth.php">Next</a>
        <br/>
        <?php
            function sum($x=100,$y=-100){
                $z= $x+$y;
                return "$z <br/>";
            }
            echo "5 + ? = ". sum(5);
            //echo "? + 10 = ". sum(,10);//can't do this
            echo "644 + 66 = ". sum(644,66); 
        ?>
        <br/>
        <?php
            $i=0;
            $logic= count($Pkm) -1;
            while ($i< $logic){
                $text.=$Pkm[$i].", ";
                $i++;
            }
            echo $text;
            echo "and ".$Pkm[$logic];
            //This is dynamic, as the array changes so does this!
        ?>
        <br/>
        <?php
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['HTTP_REFERER'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            echo $_SERVER['SCRIPT_NAME'];
        ?>
    </body>
</html>
