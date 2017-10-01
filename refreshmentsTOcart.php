<?php
    session_start();
    $q=$_GET["q"];
    $select = "";
    
    $dbc = mysqli_connect ('localhost', 'root', '', 'dead @ 28 website') or die ("bad connect:". mysqli_connect_eror ());
    //echo "successfully connected"."<br>";
    
    $result2 = mysqli_query ($dbc,"SELECT `price` FROM food_and_drinks WHERE id = '".$q."'");
    while($row = $result2->fetch_assoc())
      {
        $z[] = $row["price"];
      }
    
    $sql="INSERT INTO `shopping_cart` (`customer_id`, `item_id`, `price`) VALUES ('".$_SESSION["customer_id"]."','".$q."', '".$z[0]."')";
    echo $sql;
    //INSERT INTO `shopping_cart`(`customer_id`, `item_id`, `seat`, `price`) VALUES ([value-1],[value-2],[value-3],[value-4])
    
    mysqli_query ($dbc,$sql);
?>

