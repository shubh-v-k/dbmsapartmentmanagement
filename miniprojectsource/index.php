<?php
require_once 'includes/header.php'
 ?><div><center>
<h1><p style="color:#d35d6e">APARTMENT MANAGEMENT SYSTEM</p></h1></center>
<div class="maindiv">

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p class="open">This Project Uses HTML, PHP and Database commands to create an Apartment Databese System.
This allows Owners and Tenants to register and login into their accounts.<br>Owners can register
their buildings.They can also view the payments paid by the tenants and see how much rent is due.
<br>Tenants can register that they are renting an apartment and see how much payment is due to their
respective apartment.</p><br><hr><br><br>
<h1>Tables Used in the project:</h1>
 <h2>Owner Table:</h2>
  <?php
  $sql = "SELECT * FROM `owner`";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
if ($rowCount>0)
{
  echo "<center><table>";
  echo "<tr>
  <td>
  <strong>Owner ID</strong>
  </td>
  <td>
  <strong>Owner UserName</strong>
  </td>
  <td>
  <strong>Owner First Name</strong>
  </td>
  <td>
  <strong>Owner Last Name</strong>
  </td>
  <td>
  <strong>Owner Contact</strong>
  </td>
  <td>
  <strong>Owner Address<strong></strong>
  </td>
  </tr>";
  while ($row = mysqli_fetch_assoc($result))
  {
    echo "<tr>";
    echo "<td>".$row['OwnerID'] ."</td>";
    echo "<td>".$row['OwnerUsername'] ."</td>";
    echo "<td>".$row['OwnerFName'] ."</td>";
    echo "<td>".$row['OwnerLName'] ."</td>";
    echo "<td>".$row['OwnerContact']."</td>";
    echo "<td>".$row['OwnerAddress']."</td>";
    echo "</tr>";
  }
  echo "</table></center><br>";
}
else {
  echo 'No Results Found';
}

?>

   <h2>Tenant Table:</h2>
   <?php
   $sql = "SELECT * FROM `Tenant`";
   $result = mysqli_query($conn, $sql);
   $rowCount = mysqli_num_rows($result);
   if ($rowCount>0)
   {
     echo "<center><table>";
     echo "<tr>
     <td>
     <strong>Tenant ID</strong>
     </td>
     <td>
     <strong>Tenant UserName</strong>
     </td>
     <td>
     <strong>Tenant First Name</strong>
     </td>
     <td>
     <strong>Tenant Last Name</strong>
     </td>
     <td>
     <strong>Tenant Contact</strong>
     </td>
     <td>
     <strong>Tenant Address</strong>
     </td>
     </tr>";
     while ($row = mysqli_fetch_assoc($result))
     {
       echo "<tr>";
       echo "<td>".$row['TenantID'] ."</td>";
       echo "<td>".$row['TenantUsername'] ."</td>";
       echo "<td>".$row['TenantFName'] ."</td>";
       echo "<td>".$row['TenantLName'] ."</td>";
       echo "<td>".$row['TenantContact']."</td>";
       echo "<td>".$row['TenantAddress']."</td>";
       echo "</tr>";
     }
     echo "</table></center><br>";
   }
 else {
   echo 'No Results Found';
 }

    ?>
    <h2>Building Table:</h2>
     <?php
     $sql = "SELECT * FROM `building`";
     $result = mysqli_query($conn, $sql);
     $rowCount = mysqli_num_rows($result);
     if ($rowCount>0)
     {
       echo "<center><table>";
       echo "<tr>
       <td>
       <strong>BuildingID</strong>
       </td>
       <td>
       <strong>OwnerID</strong>
       </td>
       <td>
       <strong>BuildingAddress</strong>
       </td>
       <td>
       <strong>BuildingName</strong>
       </td>
       <td>
       <strong>BuildingFloors</strong>
       </td>
       <td>
       <strong>Number of Tenants</strong>
       </td>
       </tr>";
       while ($row = mysqli_fetch_assoc($result))
       {
         echo "<tr>";
         echo "<td>".$row['BuildingID'] ."</td>";
         echo "<td>".$row['OwnerID'] ."</td>";
         echo "<td>".$row['BuildingAddress']."</td>";
         echo "<td>".$row['BuildingName']."</td>";
         echo "<td>".$row['BuildingFloors']."</td>";
         echo "<td>".$row['Tenants']."</td>";
         echo "</tr>";
       }
       echo "</table></center><br>";
     }
   else {
     echo 'No Results Found';
   }

      ?>

      <h2>Apartment Table:</h2>
       <?php
       $sql = "SELECT * FROM `apartment`";
       $result = mysqli_query($conn, $sql);
       $rowCount = mysqli_num_rows($result);
       if ($rowCount>0)
       {
         echo "<center><table>";
         echo "<tr>
         <td>
         <strong>ApartmentID</strong>
         </td>
         <td>
         <strong>FlatNum</strong>
         </td>
         <td>
         <strong>BuildingID</strong>
         </td>
         <td>
         <strong>TenantID</strong>
         </td>
         <td>
         <strong>Rent</strong>
         </td>
         <td>
         <strong>StartDate</strong>
         </td>
         <td>
         <strong>Owe</strong>
         </td>
         </tr>";
         while ($row = mysqli_fetch_assoc($result))
         {
           echo "<tr>";
           echo "<td>".$row['ApartmentID'] ."</td>";
           echo "<td>".$row['FlatNum'] ."</td>";
           echo "<td>".$row['BuildingID']."</td>";
           echo "<td>".$row['TenantID']."</td>";
           echo "<td>".$row['Rent']."</td>";
           echo "<td>".$row['StartDate']."</td>";
           echo "<td>".$row['Owe']."</td>";
           echo "</tr>";
         }
         echo "</table></center><br>";
       }
     else {
       echo 'No Results Found';
     }

?>
<h2>Payment Table:</h2>
 <?php
 $sql = "SELECT * FROM `payment`";
 $result = mysqli_query($conn, $sql);
 $rowCount = mysqli_num_rows($result);
 if ($rowCount>0)
 {
   echo "<center><table>";
   echo "<tr>
   <td>
   <strong>PaymentID</strong>
   </td>
   <td>
   <strong>PaymentDate</strong>
   </td>
   <td>
   <strong>ApartmentID</strong>
   </td>
   <td>
   <strong>TenantID</strong>
   </td>
   <td>
   <strong>FlatNum</strong>
   </td>
   <td>
   <strong>PaidRent</strong>
   </td>
   </tr>";
   while ($row = mysqli_fetch_assoc($result))
   {
     echo "<tr>";
     echo "<td>".$row['PaymentID'] ."</td>";
     echo "<td>".$row['PaymentDate'] ."</td>";
     echo "<td>".$row['ApartmentID']."</td>";
     echo "<td>".$row['TenantID']."</td>";
     echo "<td>".$row['FlatNum']."</td>";
     echo "<td>".$row['PaidRent']."</td>";
     echo "</tr>";
   }
   echo "</table></center><br>";
 }
else {
 echo 'No Results Found';
}

?>

 </div>
<?php
require_once 'includes/footer.php'
 ?>
