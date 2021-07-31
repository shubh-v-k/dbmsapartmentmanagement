<?php
require_once 'includes/owner_head.php'
 ?>
 <div>
 <br><br><br><br>
 <h1>Owner Table:</h1>
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
<br><br><br><br>
<h2>Check if Tenant hasn't paid rent?</h2>
<form action="tenantsdue.php" method="post">
  <input type="text" name="OwnerUsername" placeholder="Owner User Name"><br>
  <button type="submit"><strong>Submit</strong></button>
</form>
</div>
<?php
require_once 'includes/footer.php'
 ?>
