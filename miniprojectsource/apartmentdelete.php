<?php
require_once 'includes/tenant_head.php'
 ?>
 <?php
 $TenantID=$_POST['TenantID'];
 $FlatNum=$_POST['FlatNum'];


 $sql = "DELETE FROM apartment WHERE apartment.TenantID ='$TenantID' AND apartment.FlatNum = '$FlatNum';";

 if(empty($TenantID)||empty($FlatNum))
 {
   echo '<h1><center>Cannot Delete Occupancy<br /><br />';
   if (empty($TenantID)) {
     echo 'TenantID cannot be empty<br />';
   }
   if (empty($FlatNum)) {
     echo 'FlatNum cannot be empty<br /></center></h1>';
   }
 }

 else
 {
   if (!mysqli_query($conn,$sql)) {
   echo '<br><br><br><br><h1><center>Occupancy Not Deleted</center></h1>';
 }
 else {
   echo '<br><br><br><br><h1><center>Occupancy Deleted</center></h1>';
 }
}
 header("refresh:2; url=apartments.php")
 ?>
 <?php
 require_once 'includes/footer.php'
  ?>
