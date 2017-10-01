<?php
    $q=$_GET["q"];
    $select = "";
    
    $dbc = mysqli_connect ('localhost', 'root', '', 'dead @ 28 website') or die ("bad connect:". mysqli_connect_eror ());
    //echo "successfully connected"."<br>";
    
    $sql="SELECT DISTINCT date FROM movie_screenings WHERE name = '".$q."'" ;
    $result = mysqli_query ($dbc,$sql);
    
    $post = array();
      while($row = $result->fetch_assoc())
      {
        //echo $row["date"]."<br>";
        $post[] = $row["date"];
      }
    $select='<select class="" onchange="showTimes(this.value);">
<option></option>
';
    for ($i=0;$i<count($post);$i++){
        $select.='<option value="'.$post[$i].'">'.$post[$i].'</option>
';
    }
    $select.='</select>';
    echo $select;
?>
