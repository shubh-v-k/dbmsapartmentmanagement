<?php
require_once 'includes/header.php'
 ?>
 <?php
 $tenantusername=$_POST['TenantUsername'];
 $tenantpass=$_POST['TenantPass'];
 $sql = "SELECT * FROM `tenant` WHERE tenant.TenantUsername = '$tenantusername' AND tenant.TenantPass = '$tenantpass'";
 $result = mysqli_query($conn, $sql);
 $rowCount = mysqli_num_rows($result);
 if (!mysqli_query($conn,$sql))
{
   echo '<br><br><br><br><h1><center>Cannot Login</center></h1>';
   header("refresh:5; url=index.php");
 }
 else if ($rowCount>0){
   echo '<br><br><br><br><h1><center>Login Successful!</center></h1>';
 }
 else{
   echo '<br><br><br><br><h1><center>Cannot Login</center></h1>';
   die();
 }
 header("refresh:2; url=tenants.php")
 ?>
 <?php
 require_once 'includes/footer.php'
  ?>
