<?php

session_start();
require 'db_connection.php';

// SECURITY CHECK: Is the user logged in AND are they an admin?
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 'admin') {
    header('location:login.php');
    exit();
}

if (isset($_GET['id'])) {
    
    $id_to_delete = mysqli_real_escape_string($con, $_GET['id']);
    
    // SAFETY CHECK: Make sure the admin is not deleting their own account
    if ($id_to_delete == $_SESSION['id']) {
        echo "<script>
                alert('You cannot delete your own admin account!');
                window.location.href = 'admin_panel.php';
              </script>";
        exit();
    }
    
    // Create the SQL DELETE query
    $sql = "DELETE FROM users WHERE ID = '$id_to_delete'";
    
    if (mysqli_query($con, $sql)) {
        // Success
        header('location:admin_panel.php');
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
    
} else {
    // No ID was provided
    header('location:admin_panel.php');
    exit();
}
?>