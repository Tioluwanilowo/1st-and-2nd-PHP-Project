<?php
// Start the session (if not already started)
session_start();

// Check if the admin is logged in
if (isset($_SESSION['admin_id'])) {
    // Unset the admin ID session variable
    unset($_SESSION['admin_id']);
}

// Redirect to the admin login page
header("Location: admin_login.php");
exit;
?>
