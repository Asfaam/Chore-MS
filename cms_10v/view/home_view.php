<?php include '../functions/home_fxn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore-MS|HomePage</title>
    <!-- Integrate Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/home_view.css">

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

    #hungLeft {
        float: left;
    }

    #hungRight {
        float: right;
    }

    .txt:hover::after {
        content: "Restricted Access except for admin and super-admin";
        position: absolute;
    	top: calc(100% + 5px); 
    	left: calc(50% - 100px); 
        background-color: red;
        color: white;
        padding: 10px; 
    	border-radius: 5px;
    	font-family: Arial, sans-serif;
    	font-size: 14px;;
    }
 
</style>
</head>
<body class="bg-gray-100 p-4">
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bx-home'></i>
            <span class="text" style ="font-family:Goudy Old Style; font-size: 26px;"><strong><em> Chore `MS`</em></strong></span>
        </a>
	
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 23px;"><strong><em>Home</em></strong></span>
                </a>
            </li>
            <li>
                <a href="manage_chores.php">
                    <i class='bx bx-task' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 23px;"><strong><em>Manage Chores ➡️</em></strong></span>

                </a>
            </li>
            <li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../settings/user_settings_view.php">
                    <i class='bx bxs-cog' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 22px;"><strong><em>Settings</em></strong></span>
                </a>
            </li>
            <li>
                <a href="../Login/logout_view.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 22px;"><strong><em>Logout</em></strong></span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content">
        <nav>
            <i class='bx bx-menu' ></i>
            <form action="#">
                <div class="form-input">
                    <em><input type="search" placeholder="Search..." style ="font-family:Goudy Old Style; font-size: 18px;"></em>
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            
            <a href="../admin/adminPage.php" class="brand" style="color:blue">
            <i class='bx bx-user'></i>
            <span class="txt" style ="font-family:Goudy Old Style; font-size: 18px;"><small><strong><em>@admin...</em></strong></small></span>
        </a>
        </nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <h2 style ="font-family:Goudy Old Style; font-size: 30px;"><strong><em>Dashboard</em></strong></h2>
                    <ul class="breadcrumb">
                        <li>
                            
                        </li>
                        <li><i class='bx bx-refresh' ></i></li>
                        <li>
                            <a class="active" href="home_view.php" style ="font-family:Goudy Old Style; font-size: 17px;"><em>Home</em></a>
                        </li>
                    </ul>
                </div>
            </div>
	</main>
    <br>
    <h4 class="text-2xl font-bold mb-4" style ="font-family:Goudy Old Style; font-size: 23px;"><em>Chore Status<em></h4>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <a href="manage_chores.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="assigned-chores"><span class="icon">&#x2611;</span><p class="text-lg font-bold"><em>All Chores</em></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_assigned_chores(); ?></strong></p>
        </div>
	</a>
    
	<a href="manage_chores.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="in-progress"><span class="icon">&#x270F;</span><p class="text-lg font-bold"><em>In Progress</em></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_chores_in_progress(); ?></strong></p>
        </div>
	</a> 
        <br>
	<a href="manage_chores.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="incomplete"><span class="icon">&#x274C;</span><p class="text-lg font-bold" style="color:white"><em>Incomplete</em></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_incomplete_chores(); ?></strong></p>
        </div>
	</a>

	<a href="manage_chores.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="complete"><span class="icon">&#x2714;</span><p class="text-lg font-bold"><em>Completed</em></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_completed_chores(); ?></strong></p>
        </div>
	</a>
    </div>
    <br>
 	<div>
        <!-- Display recently assigned chores -->
        <?php display_recently_assigned_chores(); ?>
    </div>

    </section>
    </body>
</html>