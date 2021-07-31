<?php
require_once 'includes/owner_head.php'
 ?><div>
   <h1>Insert New Building:</h1><br>
 <form action="buildinginsert.php" method="post">
   <input type="text" name="BuildingID" placeholder="BuildingID"><br>
   <input type="text" name="OwnerID" placeholder="OwnerID"><br>
   <input type="text" name="BuildingAddress" placeholder="BuildingAddress"><br>
   <input type="text" name="BuildingName" placeholder="BuildingName"><br>
   <input type="text" name="BuildingFloors" placeholder="BuildingFloors"><br>
   <button type="submit"><strong>Insert Building</strong></button>
 </form>
<br><br><br><br>
 <h1>Building Table:</h1>
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
</div>
<?php
require_once 'includes/footer.php'
 ?>
