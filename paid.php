<?php
    session_start();
    $select = "";
    
    $dbc = mysqli_connect ('localhost', 'root', '', 'dead @ 28 website') or die ("bad connect:". mysqli_connect_eror ());
    //echo "successfully connected"."<br>";
    
    
    $sql="INSERT INTO `purchased_items`(`customer_id`, `item_id`, `seat`, `price`) SELECT `customer_id`, `item_id`, `seat`, `price` FROM `shopping_cart` WHERE customer_id = '".$_SESSION["customer_id"]."'";
    mysqli_query ($dbc,$sql);
    $result2 = mysqli_query ($dbc,"SELECT `item_id`, `seat` FROM `shopping_cart` WHERE customer_id = '".$_SESSION["customer_id"]."' AND `item_id` < 100");
    
    
    $x1 = array();
    $x2 = array();
    $x3 = array();
    
      while($row2 = $result2->fetch_assoc())
      {
        //echo $row["date"]."<br>";
        $x1[] = $row2["item_id"];
        $x2[] = $row2["seat"];
        //$x3[] = $row["movie_id"];
      }
      
      for ($i=0;$i<count($x1);$i++){
        $sql="UPDATE `theatres` SET `availability`= 0 WHERE `movie_id`=".$x1[$i]." AND `seat`='".$x2[$i]."'";
        echo $sql;
        mysqli_query ($dbc,$sql);
    }
    
    $_SESSION["customer_id"]= 0;
/*
INSERT INTO Table2 (<columns>)
SELECT <columns>
FROM Table1
WHERE <condition>;

DELETE FROM Table1
WHERE <condition>;

COMMIT;

INSERT INTO `purchased_items`(`customer_id`, `type`, `item_id`, `price`, `seat`) SELECT `customer_id`, `item_id`, `seat`, `price` FROM `shopping_cart` WHERE customer_id = '".$post2[0]."'";
*/

?>
