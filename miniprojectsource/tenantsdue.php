<?php
require_once 'includes/owner_head.php'
 ?>
 <br><br><br><br><br>
 <?php
 $ownerusername=$_POST['OwnerUsername'];
$sql = "CALL `getDueTenants`('$ownerusername')";

$result = mysqli_query($conn, $sql);
 $rowCount = mysqli_num_rows($result);

 if(empty($ownerusername))
 {
   echo '<h1><center>';
   if (empty($ownerusername)) {
     echo 'owner user name cannot be empty<br /></center></h1>';
   }
 }

else{
  if ($rowCount>0)
{
 echo "<center><table>";
 echo "<tr>
 <td>
 <strong>To be paid by:</strong>
 </td>
 <td>
 <strong>To be paid to:</strong>
 </td>
 <td>
 <strong>FlatNum:</strong>
 </td>
 <td>
 <strong>Total Rent to Pay:</strong>
 </td>
 <td>
 <strong>Rent Currently Due:</strong>
 </td>
 </tr>";
 while ($row = mysqli_fetch_assoc($result))
 {
   echo "<tr>";
   echo "<td>".$row['TenantFName'] ."</td>";
   echo "<td>".$row['OwnerFName'] ."</td>";
   echo "<td>".$row['FlatNum']."</td>";
   echo "<td>".$row['Rent']."</td>";
   echo "<td>".$row['Owe']."</td>";
   echo "</tr>";
 }
 echo "</table></center><br>";
}
else {
 echo '<center><h1>No Tenant Payment Due</h1></center>';
}
}
 ?>
 <?php
 require_once 'includes/footer.php'
  ?>
