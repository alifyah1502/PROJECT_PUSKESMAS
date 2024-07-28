<?php
function check_login($conn)
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        die;
    }
}
?>