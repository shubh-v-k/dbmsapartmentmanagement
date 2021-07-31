<?php
require_once 'includes/tenant_head.php'
 ?>
 <?php
 $ApartmentID=$_POST['ApartmentID'];
 $FlatNum=$_POST['FlatNum'];
 $BuildingID=$_POST['BuildingID'];
 $TenantID=$_POST['TenantID'];
 $Rent=$_POST['Rent'];
 $StartDate=$_POST['StartDate'];

 $sql = "INSERT INTO `apartment`(ApartmentID,FlatNum,BuildingID,TenantID,Rent,StartDate,Owe) VALUES('$ApartmentID','$FlatNum','$BuildingID','$TenantID','$Rent','$StartDate','$Rent')";

 if(empty($ApartmentID)||empty($FlatNum)||empty($BuildingID)||empty($TenantID)||empty($Rent)||empty($StartDate))
 {
   echo '<h1><center>Cannot Add Apartment<br /><br />';
   if (empty($ApartmentID)) {
     echo 'ApartmentID cannot be empty<br />';
   }
   if (empty($FlatNum)) {
     echo 'FlatNum cannot be empty<br />';
   }
   if (empty($BuildingID)) {
   echo 'BuildingID cannot be empty<br />';
   }
   if (empty($TenantID)) {
     echo 'TenantID cannot be empty<br />';
   }
   if (empty($Rent)) {
     echo 'Rent cannot be empty<br />';
   }
   if (empty($StartDate)) {
     echo 'StartDate cannot be empty<br /></center></h1>';
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
 header("refresh:5; url=apartments.php")
 ?>
 <?php
 require_once 'includes/footer.php'
  ?>
