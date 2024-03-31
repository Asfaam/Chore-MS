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
            <span class="text"><strong>@admin|Faisal</strong></span>
        </a>

        <ul class="side-menu top">
            <li class="active">
             	 <div>
	             <a href="../view/home_view.php">
                       <span style="float:right"><strong><button><i class='bx bxs-dashboard'>&nbsp;Homepage</i></button></strong></span>
	             </a>
             	</div>
            </li>
	    <br>  
            <li>
                <a href="chore_control_view.php">
                    <i class='bx bx-task' ></i>
                    <span class="text"><strong>ChoreManagement|List ➡️</strong></span>
                </a>
            </li>
	    <li>
                <a href="assign_chore_view.php">
                    <i class='bx bx-task' ></i>
                    <span class="text"><strong>Chore Assignment ➡️</strong></span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../settings/admin_settings_view.php">
                    <i class='bx bxs-cog' ></i>
                    <span class="text"><strong>Settings</strong></span>
                </a>
            </li>
            <li>
                <a href="../Login/logout_view.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text"><strong>Logout</strong></span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content">
        <nav>
            <i class='bx bx-menu' ></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            
            <a href="#" class="profile">
                <img src="../img/user.png">
            </a>
        </nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Admin Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            
                        </li>
                        <li><i class='bx bx-refresh' ></i></li>
                        <li>
                            <a class="active" href="adminPage.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
	</main>
   
    
    <h1 class="text-2xl font-bold mb-4">Chore Status</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">  
	<a href="admin_chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="assigned-chores"><span class="icon">&#x2611;</span><p class="text-lg font-bold">All Assigned Chores</p></li>
            <p class="text-2xl" style="color:blue"><strong>18</strong></p>
        </div>
	</a>
    
	<a href="admin_chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="in-progress"><span class="icon">&#x270F;</span><p class="text-lg font-bold">In Progress</p></li>
            <p class="text-2xl" style="color:blue"><strong>5</strong></p>
        </div>
	</a> <br>

	<a href="admin_chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="incomplete"><span class="icon">&#x274C;</span><p class="text-lg font-bold">Incomplete</p></li>
            <p class="text-2xl" style="color:blue"><strong>3</strong></p>
        </div>
	</a>

	<a href="admin_chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="complete"><span class="icon">&#x2714;</span><p class="text-lg font-bold">Completed</p></li>
            <p class="text-2xl" style="color:blue"><strong>10</strong></p>
        </div>
	</a>
    </div>

   
	    
    </body>
</html>