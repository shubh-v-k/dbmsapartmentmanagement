<?php
require_once 'includes/tenant_head.php'
 ?>
 <?php
 $PaymentID=$_POST['PaymentID'];
 $PaymentDate=$_POST['PaymentDate'];
 $ApartmentID=$_POST['ApartmentID'];
 $TenantID=$_POST['TenantID'];
 $FlatNum=$_POST['FlatNum'];
 $PaidRent=$_POST['PaidRent'];

 $sql = "INSERT INTO `payment`(PaymentID,PaymentDate,ApartmentID,TenantID,FlatNum,PaidRent)
 VALUES('$PaymentID','$PaymentDate','$ApartmentID','$TenantID','$FlatNum','$PaidRent')";

 if(empty($PaymentID)||empty($PaymentDate)||empty($ApartmentID)||empty($TenantID)||empty($FlatNum)||empty($PaidRent))
 {
   echo '<h1><center>Cannot Add Owner<br /><br />';
   if (empty($PaymentID)) {
     echo 'PaymentID cannot be empty<br />';
   }
   if (empty($PaymentDate)) {
     echo 'PaymentDate cannot be empty<br />';
   }
   if (empty($ApartmentID)) {
   echo 'ApartmentID cannot be empty<br />';
   }
   if (empty($TenantID)) {
     echo 'TenantID cannot be empty<br />';
   }
   if (empty($FlatNum)) {
     echo 'FlatNum cannot be empty<br />';
   }
   if (empty($PaidRent)) {
     echo 'PaidRent cannot be empty<br /></center></h1>';
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
 header("refresh:5; url=tenant_payments.php")
 ?>
 <?php
 require_once 'includes/footer.php'
  ?>
