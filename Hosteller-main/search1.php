<?php
require "./conn.php";
$key=$_REQUEST["id"];
$res1=mysqli_query($conn,"select * from hostel where location='$key'");
while(($rows1=mysqli_fetch_array($res1)))
{
?>
<div class="card-group">
  <div class="card">'
 <img src='img/<?php echo$rows1[0];?>' class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo$rows1[3]; ?></h5>
      <p class="card-text"><?php echo$rows1[6];?></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>


<?php

}

?>
