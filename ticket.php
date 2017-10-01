<?php
    session_start();
    	// Set session variables
    $id=$_GET["q"];
    $seats=json_decode($_GET["t"]);
    $i = 0;
    
    $dbc = mysqli_connect ('localhost', 'root', '', 'dead @ 28 website') or die ("bad connect:". mysqli_connect_eror ());
    //echo "successfully connected"."<br>";

    
    //INSERT INTO `tickets`(`customer_id`, `type`, `movie_id`, `price`, `seat`) VALUES ([value-1],'".$q."','".$q."','".$q."','".$q."')
    mysqli_query ($dbc,'INSERT INTO `customer`(`id`) VALUES ("")');
    $result = mysqli_query ($dbc,'SELECT MAX(id) FROM `customer`');
    $post2 = array();
      while($row = $result->fetch_assoc())
      {
        $post2[] = $row["MAX(id)"];
      }

    $_SESSION["customer_id"] = $post2[0];
    $_SESSION["seats_num"] = 0;
    
    $result2 = mysqli_query ($dbc,'SELECT `name` FROM `movie_screenings` WHERE id = "'.$id.'"');
    $post3 = array();
      while($row2 = $result2->fetch_assoc())
      {
        $post3[] = $row2["name"];
        $_SESSION["seats_num"] += 1;
      }

    
    $_SESSION["movie_name"] = $post3[0];
    
    $post = array();
      for ($i=0;$i<count($seats);$i++){
        $sql="INSERT INTO `shopping_cart`(`customer_id`, `item_id`, `price`, `seat`) VALUES ('".$post2[0]."','".$id."',10,'".$seats[$i]."')" ;
        mysqli_query ($dbc,$sql);
    }
    
    echo $post2[0];
?>