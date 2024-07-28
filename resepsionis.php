<?php
session_start();
include('includes/db.php');
include('includes/functions.php');
check_login($conn);
include('templates/header.php');
?>

<main>
    <h2>Manage Receptionists</h2>
    <!-- Add receptionist management functionality here -->
</main>

<?php include('templates/footer.php'); ?>