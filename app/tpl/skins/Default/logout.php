<?php
session_unset($_SESSION['user_id']);
session_destroy();

header('index');
exit;
?>