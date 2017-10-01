<?php
    $q=$_GET["q"];
    $mov=$_GET["r"];
    $select = "";
    
    $dbc = mysqli_connect ('localhost', 'root', '', 'dead @ 28 website') or die ("bad connect:". mysqli_connect_eror ());
    //echo "successfully connected"."<br>";
    
    $sql="SELECT time, id FROM movie_screenings WHERE date = '".$q."' AND name = '".$mov."'";
    $result = mysqli_query ($dbc,$sql);
    
    $post = array();
    $vals = array();
      while($row = $result->fetch_assoc())
      {
        $post[] = $row["time"];
        $vals[] = $row["id"];
      }
?>
<form action="">
    <select name="times" onchange="showSeating(this.value);">
    <?php
    $select='<option></option>';
    for ($i=0;$i<count($post);$i++){
      $select.='<option value="'.$vals[$i].'">'.$post[$i].'</option>';
    }
    $select.='</select>';
    echo $select;
    
    ?>
</form>
