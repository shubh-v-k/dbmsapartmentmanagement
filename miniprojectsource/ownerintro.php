<?php
require_once 'includes/header.php'
 ?>
 <div>

   <h1>Login:</h1><br>
 <form action="ownerlogin.php" method="post">
   <input type="text" name="OwnerUsername" placeholder="OwnerUsername"><br>
   <input type="password" name="OwnerPass" placeholder="OwnerPassword"><br>
   <button type="submit"><strong>LOGIN</strong></button>
 </form>
 <br><br><br><br>

   <h1>Register New Owner:</h1><br>
 <form action="ownerinsert.php" method="post">
   <input type="text" name="OwnerID" placeholder="OwnerID"><br>
   <input type="text" name="OwnerUsername" placeholder="Owner User Name"><br>
   <input type="text" name="OwnerFName" placeholder="Owner First Name"><br>
   <input type="text" name="OwnerLName" placeholder="Owner Last Name"><br>
   <input type="password" name="OwnerPass" placeholder="OwnerPassword"><br>
   <input type="text" name="OwnerContact" placeholder="OwnerContact"><br>
   <input type="text" name="OwnerAddress" placeholder="OwnerAddress"><br>
   <button type="submit"><strong>Register Owner</strong></button>
 </form>
 <br><br><br><br>
</div>
<?php
require_once 'includes/footer.php'
 ?>
