<!Doctype html>
<html>
    <head>
        <title>Water bill</title>
        
    </head>
    <body>
        <h1 align="center">WATER BILL</h1>
        <form method="post">
            <table align="center">
                <tr>
                    <td>
                         METER NUMBER:
                    </td>
                    <td>
                        <input type="text" name="meter">
                    </td>
                </tr>
                <tr>
                    <td>
                        ENTER THE SLAB:
                    </td>
                    <td>
                        <input type="text" name="unit" id="unit">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button name="s">SUBMIT</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
    <?php
    $meter=$_POST['meter'];
    $slab=$_POST['unit'];
    $price=0;
    if($slab>=0 && $slab<=15)
    {
        $x=3;
        $price=$slab*$x;
    }
    else if($slab>=16 && $slab<=30)
    {
        $x=6;
        $price=$slab*$x;
    }
    else if($slab>=31 && $slab<=60)
    {
        $x=12;
        $price=$slab*$x;
    }
    else
    {
        $x=24;
        $price=$slab*$x;
    }
    echo "<br>";
    echo "the meter number is".$meter;
    echo "<br>";
    echo "the price is".$price;
    ?>
</html>