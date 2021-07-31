<?php
require_once 'includes/owner_head.php'
 ?>
 <?php
 $BuildingID=$_POST['BuildingID'];
 $OwnerID=$_POST['OwnerID'];
 $BuildingAddress=$_POST['BuildingAddress'];
 $BuildingName=$_POST['BuildingName'];
 $BuildingFloors=$_POST['BuildingFloors'];

 $sql = "INSERT INTO `building`(BuildingID,OwnerID,BuildingAddress,BuildingName,BuildingFloors,Tenants) VALUES('$BuildingID','$OwnerID','$BuildingAddress','$BuildingName','$BuildingFloors','0')";

 if(empty($BuildingID)||empty($OwnerID)||empty($BuildingAddress)||empty($BuildingName)||empty($BuildingFloors))
 {
   echo '<h1><center>Cannot Add Owner<br /><br />';
   if (empty($BuildingID)) {
     echo 'BuildingID cannot be empty<br />';
   }
   if (empty($OwnerID)) {
     echo 'OwnerID cannot be empty<br />';
   }
   if (empty($BuildingAddress)) {
   echo 'Building Address cannot be empty<br />';
   }
   if (empty($BuildingName)) {
     echo 'Building Name cannot be empty<br />';
   }
   if (empty($BuildingFloors)) {
     echo 'Building Floors cannot be empty<br /></center></h1>';
   }
 }
else{
 if (!mysqli_query($conn,$sql)) {
   echo '<br><br><br><br><h1><center>Not Inserted</center></h1>';
 }
 else {
   echo '<br><br><br><br><h1><center>Inserted</center></h1>';
 }
}
 header("refresh:2; url=buildings.php")
 ?>
 <?php
 require_once 'includes/footer.php'
  ?>
