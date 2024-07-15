<?php
session_start();

// Set the session timeout 
$timeout_duration = 1800; // 30 minutes

// Check if the session has timed out
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    // Last request was more than 30 minutes ago
    session_unset(); // Unset $_SESSION variables
    session_destroy(); // Destroy the session
    // Redirect to the login page or timeout notification page
    header("Location: user_login.php");
    exit();
}

// Update last activity time
$_SESSION['LAST_ACTIVITY'] = time();
?>
