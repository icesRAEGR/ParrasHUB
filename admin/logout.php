<?php
session_start();
session_destroy();
header("Location: /ParrasHUB/Index.php");
exit();
?>