<?php
session_start();
session_destroy();
setcookie("user", "", time() - 3600, "/"); // Expire cookie

header("Location: login.php");
exit();
?>
