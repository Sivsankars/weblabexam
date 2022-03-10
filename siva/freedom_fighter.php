<!Doctype html>
<html>
    <head>
        <title>INDIAN FREEDOM FIGTHER</title>
        <?php
        $X=array("GANDHIJI","NEHRU","BHAGATH SINGH","");
        $i=0;
        echo "<h1 align='center'>INDIAN FREEDOM FIGTHTER</h1>";
        echo "<table align='center' border='1'>";
        for($i;$i<3;$i++)
        {
            $y=$i+1;
            echo "<tr><td>".$y."</td><td>".$X[$i]."</td></tr>";
        }
        echo "</table>";
        ?>
    </head>
    <body>
    </body>
</html>