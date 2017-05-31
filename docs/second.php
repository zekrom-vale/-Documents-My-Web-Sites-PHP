<?php
    class Pokemon{
        function Pokemon($Pkm){
            $this->Pokemon= $Pkm;
        }
    }
    $Zekrom= new Pokemon(Zekrom);
    define("hi", "Good Day");
    include '_Main.php';
    echo "This is a above doc test. ", " This may break!!!", br;
    print "Or not... <br/><br/>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Second</title>
    </head>
    <body>
        <a href="index.php">Prev</a>
        <a href="thrd.php">Next</a>
        <?php
            echo $Zekrom->Pokemon;
            echo br;
            echo "Length: ", strlen($Zekrom->Pokemon);
            echo br. hi;// can't be in ""
        ?>
        <br/>
        <br/>
        <br/>
        <?php
            $t= date("H");
            $ms= date("m").":". date("s");
            if($t<10){
                echo "Good Mornig (", $t,")";
            }
            elseif($t<20){
                print "Good day! ($t)";
            }
            else{
                echo "Good night.". "(". $t.")";
            }
            echo '<p hidden>',$ms, br, bp;
            $i= -500;
            while($i<=500){
                echo p,$i, "^3= ", $i*$i*$i, bp;
                $i++;
            }
        ?>
    </body>
</html>
