<?php
require_once 'includes/header.php'
 ?>
 <div>

   <h1>Login:</h1><br>
 <form action="tenantlogin.php" method="post">
   <input type="text" name="TenantUsername" placeholder="Tenant User Name"><br>
   <input type="password" name="TenantPass" placeholder="Tenant Password"><br>
   <button type="submit"><strong>LOGIN</strong></button>
 </form>
 <br><br><br><br>

   <h1>Register New Tenant:</h1><br>
 <form action="tenantinsert.php" method="post">
   <input type="text" name="TenantID" placeholder="TenantID"><br>
   <input type="text" name="TenantUsername" placeholder="Tenant User Name"><br>
   <input type="text" name="TenantFName" placeholder="Tenant First Name"><br>
   <input type="text" name="TenantLName" placeholder="Tenant Last Name"><br>
   <input type="password" name="TenantPass" placeholder="TenantPassword"><br>
   <input type="text" name="TenantContact" placeholder="TenantContact"><br>
   <input type="text" name="TenantAddress" placeholder="TenantAddress"><br>
   <button type="submit"><strong>Register Tenant</strong></button>
 </form>
 <br><br><br><br>
</div>
<?php
require_once 'includes/footer.php'
 ?>
