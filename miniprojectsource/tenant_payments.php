<?php
require_once 'includes/tenant_head.php'
 ?><div>
   <h1>Insert New Payment:</h1><br>
 <form action="paymentinsert.php" method="post">
   <input type="text" name="PaymentID" placeholder="PaymentID"><br>
   <input type="date" name="PaymentDate" placeholder="PaymentDate"><br>
   <input type="text" name="ApartmentID" placeholder="ApartmentID"><br>
   <input type="text" name="TenantID" placeholder="TenantID"><br>
   <input type="text" name="FlatNum" placeholder="FlatNum"><br>
   <input type="text" name="PaidRent" placeholder="PaidRent"><br>
   <button type="submit"><strong>Insert Payment</strong></button>
 </form>
 <br><br><br><br>
 <h1>Payment Table:</h1>
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
   <br><br><br><br>
   <h1>Payments Due:</h1>
    <?php
    $sql = "SELECT tenant.TenantFName,owner.OwnerFName,apartment.FlatNum,apartment.Rent,apartment.Owe FROM building,apartment,tenant,owner WHERE apartment.TenantID=tenant.TenantID AND apartment.BuildingID=building.BuildingID AND building.OwnerID=owner.OwnerID AND apartment.Owe>0";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
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
    echo 'No Results Found';
  }

     ?>
</div>
<?php
require_once 'includes/footer.php'
 ?>
