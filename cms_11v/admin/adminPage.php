<?php
// Include core.php
include '../settings/core.php';

// Check user role
$userRoleID = getUserRoleID();
if ($userRoleID !== false) {
    // Check if the user is not an admin or a superadmin
    if ($userRoleID != 2 && $userRoleID != 1) {
        // Redirect to main dashboard|user homepage for non-admin users
        header("Location: ../view/home_view.php");
        die();
    }
} else {
    // Redirect to login page if user role is not available
    header("Location: ../Login/register_view.php");
    die();
}


include '../functions/home_fxn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management System</title>
    <!-- Integrate Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/adminPage.css">

    <style>

        body {
            font-family: Goudy Old Style;
        }
        .icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 5px;   
        }

        .assigned-chores {
            background-color: #00FFFF; /* Cyan */
        }

        .in-progress {
            background-color: #ffcc00; /* Yellow */
        }

        .complete {
            background-color: #00cc00; /* Green */
        }

        .incomplete {
            background-color: #ff0000; /* Red */
        }

        button {
            padding: 10px 20px;
            font-size: 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body class="bg-gray-100 p-4">
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bx-user'></i>
            <span class="text" style ="font-family:Goudy Old Style; font-size: 26px;"><strong><em>@admin</em></strong></span>
        </a>

        <ul class="side-menu top">
            <li class="active">
             	 <div>
	             <a href="../view/home_view.php">
                       <span style="float:right"><strong><button><i class='bx bxs-dashboard' style ="font-family:Times New Roman; font-size: 17px;">&nbsp;UserPage</i></button></strong></span>
	             </a>
             	</div>
            </li>
	    <br>  
            <li>
                <a href="chore_control_view.php">
                    <i class='bx bx-task' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 20px;"><strong><em>Add Chore ➡️</em></strong></span>
                </a>
            </li>
	    <li>
                <a href="assign_chore_view.php">
                    <i class='bx bx-task' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 20px;"><strong><em>Chore Assignment ➡️</em></strong></span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../settings/admin_settings_view.php">
                    <i class='bx bxs-cog' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 20px;"><strong><em>Settings</em></strong></span>
                </a>
            </li>
            <li>
                <a href="../Login/logout_view.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 20px;"><strong><em>Logout</em></strong></span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content">
        <nav>
            <i class='bx bx-menu' ></i>
            <form action="#">
                <div class="form-input" style ="font-family:Goudy Old Style; font-size: 19px;">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn" style ="font-family:Goudy Old Style; font-size: 19px;"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            
            <a href="#" class="profile">
                <img src="../img/user.png">
            </a>
        </nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <h1 style ="font-family:Goudy Old Style; font-size: 35px;""><b><em>Dashboard</em></b></h1>
                    <ul class="breadcrumb">
                        <li>
                            
                        </li>
                        <li><i class='bx bx-refresh' ></i></li>
                        <li>
                            <a class="active" href="adminPage.php" style ="font-family:Goudy Old Style; font-size: 18px;"><b><em>Home</em></b></a>
                        </li>
                    </ul>
                </div>
            </div>
	</main>
   
    
    <h1 class="text-2xl font-bold mb-4"style ="font-family:Goudy Old Style; font-size: 26px;"><b><em>Chore Status</em></b></h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">  
	<a href="admin_manage_chores.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="assigned-chores"><span class="icon">&#x2611;</span><p class="text-lg font-bold"><b><em>All Chores</em></b></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_assigned_chores(); ?></strong></p>
        </div>
	</a>

    
	<a href="admin_manage_chores.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="in-progress"><span class="icon">&#x270F;</span><p class="text-lg font-bold"><b><em>In Progress</em></b></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_chores_in_progress(); ?></strong></p>
        </div>
	</a> <br>

	<a href="admin_manage_chores.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="incomplete"><span class="icon">&#x274C;</span><p class="text-lg font-bold"><b><em>Incomplete</em></b></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_incomplete_chores(); ?></strong></p>
        </div>
	</a>

	<a href="admin_manage_chores.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="complete"><span class="icon">&#x2714;</span><p class="text-lg font-bold"><b><em>Completed</em></b></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_completed_chores(); ?></strong></p>
        </div>
	</a>
    </div>

   
	    
    </body>
</html>