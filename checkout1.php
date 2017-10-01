<?php
    session_start();
    $num=$_GET["q"];
    $dbc = mysqli_connect ('localhost', 'root', '', 'dead @ 28 website') or die ("bad connect:". mysqli_connect_eror ());
    //echo "successfully connected"."<br>";
    
    $sql="SELECT * FROM shopping_cart WHERE customer_id = '".$_SESSION["customer_id"]."'" ;
    if ($num==2){
        $sql="SELECT * FROM shopping_cart WHERE customer_id = '".$_SESSION["customer_id"]."'AND item_id<100" ;
    }
    $result2 = mysqli_query ($dbc,$sql);
    $itemID = array();
    $seat = array();
    $price = array();

        while($row = $result2->fetch_assoc())
        {
          $itemID[] = $row["item_id"];
          $seat[] = $row["seat"];
          $price[] = $row["price"];
        }
      
      if ($num==1){
        $string1 = json_encode($itemID);
      }
      if ($num==2){
        $string1 = json_encode($seat);
      }
      if ($num==3){
        $string1 = json_encode($price);
      }
      echo $string1;
      //echo $string2;
      //echo $string3;
    
?>
