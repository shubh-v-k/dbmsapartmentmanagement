<?php
require_once 'includes/tenant_head.php'
 ?><div>
 <h1>Insert New Apartment:</h1><br>
<form action="apartmentinsert.php" method="post">
 <input type="text" name="ApartmentID" placeholder="ApartmentID"><br>
 <input type="text" name="FlatNum" placeholder="FlatNum"><br>
 <input type="text" name="BuildingID" placeholder="BuildingID"><br>
 <input type="text" name="TenantID" placeholder="TenantID"><br>
 <input type="text" name="Rent" placeholder="Rent"><br>
 <input type="date" name="StartDate" placeholder="StartDate"><br>
 <button type="submit"><strong>Insert Apartment</strong></button>
</form>
<br><br><br><br>

   <h1>Apartment Table:</h1>
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
     <h2>No longer a Tenant? Delete Occupancy:</h2>
     <form action="apartmentdelete.php" method="post">
       <input type="text" name="TenantID" placeholder="TenantID"><br>
       <input type="text" name="FlatNum" placeholder="FlatNum"><br>
       <button type="submit"><strong>Submit</strong></button>
     </form>
</div>
<?php
require_once 'includes/footer.php'
 ?>
