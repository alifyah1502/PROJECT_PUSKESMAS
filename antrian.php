<?php
session_start();
include('includes/db.php');
include('includes/functions.php');
check_login($conn);
include('templates/header.php');
?>

<main>
    <h2>Manage Queue</h2>
    <!-- Add queue management functionality here -->
</main>

<?php include('templates/footer.php'); ?>