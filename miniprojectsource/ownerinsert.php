<?php
require_once 'includes/header.php'
 ?>
 <?php
 $ownerid=$_POST['OwnerID'];
 $ownerusername=$_POST['OwnerUsername'];
 $ownerfname=$_POST['OwnerFName'];
 $ownerlname=$_POST['OwnerLName'];
 $ownerpass=$_POST['OwnerPass'];
 $ownercontact=$_POST['OwnerContact'];
 $owneraddress=$_POST['OwnerAddress'];
 $sql = "INSERT INTO `owner`(OwnerID,OwnerUsername,OwnerFName,OwnerLName,OwnerPass,OwnerContact,OwnerAddress) VALUES('$ownerid','$ownerusername','$ownerfname','$ownerlname','$ownerpass','$ownercontact','$owneraddress')";

if(empty($ownerid)||empty($ownerusername)||empty($ownerfname)||empty($ownerlname)||empty($ownerpass)||empty($ownercontact)||empty($owneraddress))
{
  echo '<h1><center>Cannot Add Owner<br /><br />';
  if (empty($ownerid)) {
    echo 'ID cannot be empty<br />';
  }
  if (empty($ownerusername)) {
    echo 'username cannot be empty<br />';
  }
  if (empty($ownerfname)) {
  echo 'first name cannot be empty<br />';
  }
  if (empty($ownerlname)) {
    echo 'last name cannot be empty<br />';
  }
  if (empty($ownerpass)) {
    echo 'password cannot be empty<br />';
  }
  if (empty($ownercontact)) {
    echo 'contact cannot be empty<br />';
  }
  else if (strlen($ownercontact)<10 || strlen($ownercontact)>10) {
    echo 'phone number should be 10 digits<br />';
  }
  if (empty($owneraddress)) {
    echo 'address cannot be empty<br /></center></h1>';
  }
}
else
{
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
