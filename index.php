<?php
<html>
<body>
<?php
session_start();
if($_SESSION['logged_in'] == true);
?>
<b>you are logged in!</b>
<?php else: ?>
<form action="login.php" method="POST">
<input type="text" name="username">
<input type="password" name="password">
</form>
<?php endif; ?>

</body>
</html>

?>