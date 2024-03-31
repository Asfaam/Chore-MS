<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management System</title>
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
    
  
</style>
</head>
<body class="bg-gray-100 p-4">
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bx-home'></i>
            <span class="text" style ="font-family:Goudy Old Style; font-size: 26px;"><strong>Chore `MS`</strong></span>
        </a>
	
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 23px;"><strong>Home</strong></span>
                </a>
            </li>
            <li>
                <a href="chore_management.php">
                    <i class='bx bx-task' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 23px;"><strong> Manage Chores ➡️</strong></span>

                </a>
            </li>
            <li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../settings/user_settings_view.php">
                    <i class='bx bxs-cog' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 22px;"><strong>Settings</strong></span>
                </a>
            </li>
            <li>
                <a href="../Login/logout_view.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text" style ="font-family:Goudy Old Style; font-size: 22px;"><strong>Logout</strong></span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content">
        <nav>
            <i class='bx bx-menu' ></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search..." style ="font-family:Goudy Old Style; font-size: 18px;>
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            
            <a href="../admin/adminPage.php" class="brand" style="color:blue">
            <i class='bx bx-user'></i>
            <span class="text"><small><strong>@admin...</strong></small></span>
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
    <h4 class="text-2xl font-bold mb-4" >Chore Status</h4>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">  
    <a href="chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="assigned-chores"><span class="icon">&#x2611;</span><p class="text-lg font-bold">All Assigned Chores</p></li>
            <p class="text-2xl" style="color:blue"><strong>18</strong></p>
        </div>
	</a>
    
	<a href="chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="in-progress"><span class="icon">&#x270F;</span><p class="text-lg font-bold">In Progress</p></li>
            <p class="text-2xl" style="color:blue"><strong>15</strong></p>
        </div>
	</a> <br>

	<a href="chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="incomplete"><span class="icon">&#x274C;</span><p class="text-lg font-bold">Incomplete</p></li>
            <p class="text-2xl" style="color:blue"><strong>3</strong></p>
        </div>
	</a>

	<a href="chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
             <li class="complete"><span class="icon">&#x2714;</span><p class="text-lg font-bold">Completed</p></li>
            <p class="text-2xl" style="color:blue"><strong>10</strong></p>
        </div>
	</a>
    </div>

	    <br>
	    <br>
            <h2 class="text-2xl font-bold mb-4" id="hungLeft"><strong><em>Recently Assigned Chores</em></strong></h2>
	    <h2 class="text-2xl font-bold mb-4" id="hungRight" style="color:blue"><em>View Assigned Chores</em></h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">User Name</th>
                        
                        <th class="border border-gray-300 p-2">Date Assigned</th>
                        <th class="border border-gray-300 p-2">Date Completed</th>
                        <th class="border border-gray-300 p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 p-2">John Doe</td>
                        <td class="border border-gray-300 p-2">2024-02-06</td>
                        <td class="border border-gray-300 p-2">-</td>
                        <td class="border border-gray-300 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded">View Assigned Chores</button>
                        </td>
                    </tr>

		    <tr>
                        <td class="border border-gray-300 p-2">John Doe</td>
                        <td class="border border-gray-300 p-2">2024-02-06</td>
                        <td class="border border-gray-300 p-2">-</td>
                        <td class="border border-gray-300 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded">View Assigned Chores</button>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
   
    </body>
</html>