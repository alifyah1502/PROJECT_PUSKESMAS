<?php
session_start();
include('includes/db.php');
include('includes/functions.php');
check_login($conn);
include('templates/header.php');
?>

<main>
    <h2>Welcome to the Dashboard</h2>
    <!-- Add dashboard content here -->
</main>

<?php include('templates/footer.php'); ?>