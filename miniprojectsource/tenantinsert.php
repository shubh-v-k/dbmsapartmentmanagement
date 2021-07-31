<?php
require_once 'includes/header.php'
 ?>
 <?php
 $tenantid=$_POST['TenantID'];
 $tenantusername=$_POST['TenantUsername'];
 $tenantfname=$_POST['TenantFName'];
 $tenantlname=$_POST['TenantLName'];
 $tenantpass=$_POST['TenantPass'];
 $tenantcontact=$_POST['TenantContact'];
 $tenantaddress=$_POST['TenantAddress'];
 $sql = "INSERT INTO `tenant`(TenantID,TenantUsername,TenantFName,TenantLName,TenantPass,TenantContact,TenantAddress) VALUES('$tenantid','$tenantusername','$tenantfname','$tenantlname','$tenantpass','$tenantcontact','$tenantaddress')";
 if(empty($tenantid)||empty($tenantusername)||empty($tenantfname)||empty($tenantlname)||empty($tenantpass)||empty($tenantcontact)||empty($tenantaddress))
 {
   echo '<h1><center>Cannot Add Tenant<br /><br />';
   if (empty($tenantid)) {
     echo 'ID cannot be empty<br />';
   }
   if (empty($tenantusername)) {
     echo 'username cannot be empty<br />';
   }
   if (empty($tenantfname)) {
   echo 'first name cannot be empty<br />';
   }
   if (empty($tenantlname)) {
     echo 'last name cannot be empty<br />';
   }
   if (empty($tenantpass)) {
     echo 'password cannot be empty<br />';
   }
   if (empty($tenantcontact)) {
     echo 'contact cannot be empty<br />';
   }
   else if (strlen($tenantcontact)<10 || strlen($tenantcontact)>10) {
     echo 'phone number should be 10 digits<br />';
   }
   if (empty($tenantaddress)) {
     echo 'address cannot be empty<br /></center></h1>';
   }
 }
 else{
   if (!mysqli_query($conn,$sql))
 {
   echo '<br><br><br><br><h1><center>Not Inserted</center></h1>';
 }
 else {
   echo '<br><br><br><br><h1><center>Inserted</center></h1>';
 }
}
 header("refresh:5; url=index.php")
 ?>
 <?php
 require_once 'includes/footer.php'
  ?>
