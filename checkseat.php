<?php
    $q=$_GET["q"];
    $select = "";
    
    $dbc = mysqli_connect ('localhost', 'root', '', 'dead @ 28 website') or die ("bad connect:". mysqli_connect_eror ());
    //echo "successfully connected"."<br>";
    
    $sql="SELECT seat,availability FROM theatres WHERE movie_id = '".$q."'";
    $result = mysqli_query ($dbc,$sql);
    
    $post = array();
    $ava = array();
      while($row = $result->fetch_assoc())
      {
        $post[] = $row["seat"];
        $ava[] = $row["availability"];
      }
    $select='';
    for ($i=0;$i<count($post);$i++){
        if ($ava[$i] == 1) {
            $select.='<div class="col-md-2 seat">'.$post[$i].'</div>';
        } else {
            $select.='<div class="col-md-2 seat" color=red>n/a</div>';
        }
    }
    $select.='';
    echo $select;
    //echo "hello";
?>