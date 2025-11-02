<?php

// We must start the session to check the login status
session_start();

// Check if the user is logged in AND if their role is 'admin'
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 'admin') {
    // If they are not an admin or not logged in, send them to the login page
    header('location:login.php');
    exit();
}

// 1. Include your database connection
require 'db_connection.php';

// 2. Write the query to get all users
$query_users = "SELECT ID, user_name, email, phone_number, role FROM users";
$result_users = mysqli_query($con, $query_users);

// 3. (NEW) Write the query to get all contact messages
$query_contact = "SELECT * FROM contact_us ORDER BY id DESC";
$result_contact = mysqli_query($con, $query_contact);

// 4. (NEW) Write the query to get all quotations
$query_quotes = "SELECT * FROM free_quotation ORDER BY id DESC";
$result_quotes = mysqli_query($con, $query_quotes);

// 5. (NEW) Get counts for dashboard
$total_users = mysqli_num_rows($result_users);
$total_messages = mysqli_num_rows($result_contact);
$total_quotes = mysqli_num_rows($result_quotes);

// If the code gets here, it means the user IS an admin.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        .btn-danger {
            background-color: #d9534f;
            border-color: #d43f3a;
            color: #fff !important;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }
        .btn-danger:hover {
            background-color: #c9302c;
            border-color: #ac2925;
        }
    </style>
</head>
<body>

    <header class="main-header">
        <div class="main-box">
            <div class="auto-container">
                <div class="outer-container clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="admin_panel.php"><img src="images/logo.png" alt="Logo"></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <nav class="main-menu">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="admin_panel.php">Dashboard</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <h1>Admin Panel</h1>
            <ul class="bread-crumb">
                <li>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</li>
            </ul>
        </div>
    </section>

    <div class="auto-container" style="padding: 40px 0;">
        <div class="row">
            <div class="col-md-12">
                
                <div class="row">
                    <div class="col-md-4">
                        <div style="background-color: #f4f4f4; padding: 20px; text-align: center; border-radius: 5px; margin-bottom: 20px;">
                            <h3 style="margin-top: 0;"><?php echo $total_users; ?></h3>
                            <p>Total Users</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="background-color: #f4f4f4; padding: 20px; text-align: center; border-radius: 5px; margin-bottom: 20px;">
                            <h3 style="margin-top: 0;"><?php echo $total_messages; ?></h3>
                            <p>Total Messages</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="background-color: #f4f4f4; padding: 20px; text-align: center; border-radius: 5px; margin-bottom: 20px;">
                            <h3 style="margin-top: 0;"><?php echo $total_quotes; ?></h3>
                            <p>Total Quotes</p>
                        </div>
                    </div>
                </div>
                <hr style="margin-top: 30px; margin-bottom: 30px;">
                
                <h3>Manage Users</h3>
                <p>This is a list of all users registered on the website.</p>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Role</th>
                            <th>Action</th> </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($result_users) > 0) {
                            while($row = mysqli_fetch_assoc($result_users)) {
                                echo "<tr>";
                                echo "<td>" . $row['ID'] . "</td>";
                                echo "<td>" . htmlspecialchars($row['user_name']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['phone_number']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['role']) . "</td>";
                                // --- NEW DELETE LINK ---
                                echo '<td>
                                        <a href="delete_user.php?id=' . $row['ID'] . '" 
                                           class="btn btn-danger" 
                                           onclick="return confirm(\'Are you sure you want to delete this user?\');">Delete</a>
                                      </td>';
                                // ---------------------
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No users found</td></tr>"; // CHANGED
                        }
                        ?>
                    </tbody>
                </table>
                
                <hr style="margin-top: 30px; margin-bottom: 30px;">

                <h3>Contact Form Messages</h3>
                <p>Here are the messages sent from your 'Contact' page.</p>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Action</th> </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($result_contact) > 0) {
                            while($row = mysqli_fetch_assoc($result_contact)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['phonenumber']) . "</td>";
                                echo "<td>" . nl2br(htmlspecialchars($row['message'])) . "</td>";
                                // --- NEW DELETE LINK ---
                                echo '<td>
                                        <a href="delete_contact.php?id=' . $row['id'] . '" 
                                           class="btn btn-danger" 
                                           onclick="return confirm(\'Are you sure you want to delete this message?\');">Delete</a>
                                      </td>';
                                // ---------------------
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No contact messages found</td></tr>"; // CHANGED
                        }
                        ?>
                    </tbody>
                </table>
                
                <hr style="margin-top: 30px; margin-bottom: 30px;">

                <h3>Free Quotation Requests</h3>
                <p>Here are the requests from your 'Free Quotation' page.</p>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Action</th> </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($result_quotes) > 0) {
                            while($row = mysqli_fetch_assoc($result_quotes)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['phone_number']) . "</td>";
                                echo "<td>" . nl2br(htmlspecialchars($row['message'])) . "</td>";
                                // --- NEW DELETE LINK ---
                                echo '<td>
                                        <a href="delete_quote.php?id=' . $row['id'] . '" 
                                           class="btn btn-danger" 
                                           onclick="return confirm(\'Are you sure you want to delete this quotation?\');">Delete</a>
                                      </td>';
                                // ---------------------
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No quotation requests found</td></tr>"; // CHANGED
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>