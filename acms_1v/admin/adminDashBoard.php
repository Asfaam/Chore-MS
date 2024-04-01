<?php 

// Include core.php
include '../settings/core.php';

// Check user role
$userRoleID = getUserRoleID();
if ($userRoleID !== false) {
    // Check if the user is not an admin or a super admin
    if ($userRoleID != 2 && $userRoleID != 1) {
        // Redirect to main dashboard|user homepage for non-admin users
        header("Location: ../view/home_view.php");
        die();
    }
} else {
    // Redirect to login page if user role is not available
    header("Location: ../Login/login_view.php");
    die();
}

include '../functions/home_fxn.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management Admin Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <style> 
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #343a40;
            color: #fff;
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: #fff;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#" class="brand"><i class='bx bx-user'></i><span class="text"><strong>admin</strong></span></a> <br><br>
        <ul class="list-unstyled">
            <li class="active">
                <a href="../view/home_view.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text"><strong>User View</strong></span>
                </a>
            </li>
            <li>
                <a href="chore_control_view.php">
                    <i class='bx bx-task' ></i>
                    <span class="text"><strong>Chore List</strong></span>
                </a>
            </li>
            <li>
                <a href="assign_chore_view.php">
                    <i class='bx bx-task' ></i>
                    <span class="text"><strong>Chore Assignment</strong></span>
                </a>
            </li>
        </ul> <br><br><br><br>
	<ul class="list-unstyled">
	    <li>
                <a href="../Login/Logout_view.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text"><strong>Logout</strong></span>
                </a>
            </li>
	</ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Chore Management system</h1>

        <!-- Statistics Boxes -->
        <div class="row mt-4">
	    <div class="col-md-4">
                <a href="admin_manage_chores.php" class="text-decoration-none text-dark">
                    <div class="card bg-primary text-white p-3 mb-3">
                        All Chores
                        <p><strong><?php display_assigned_chores(); ?></p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="admin_manage_chores.php" class="text-decoration-none text-dark">
                    <div class="card bg-primary text-white p-3 mb-3">
                        In Progress
                        <p><?php display_chores_in_progress(); ?></p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="admin_manage_chores.php" class="text-decoration-none text-dark">
                    <div class="card bg-warning p-3 mb-3">
                        Incomplete
                        <p><?php display_incomplete_chores(); ?></p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="admin_manage_chores.php" class="text-decoration-none text-dark">
                    <div class="card bg-success text-white p-3 mb-3">
                        Completed
                        <p><?php display_completed_chores(); ?></p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</body>
</html>

