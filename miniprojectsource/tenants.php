<?php
require_once 'includes/tenant_head.php'
 ?><div>
 <h1>Tenant Table:</h1>
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
</div>
<?php
require_once 'includes/footer.php'
 ?>
