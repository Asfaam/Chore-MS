<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management System</title>
    <!-- Integrate Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/userPage.css">
</head>
<body class="bg-gray-100 p-4">
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bx-home'></i>
            <span class="text"><strong>Chore MS</strong></span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text"><strong>Home</strong></span>
                </a>
            </li>
            <li>
                <a href="chore_management.php">
                    <i class='bx bx-task' ></i>
                    <span class="text"><strong>Manage Chores ➡️</strong></span>

                </a>
            </li>
            <li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text"><strong>Settings</strong></span>
                </a>
            </li>
            <li>
                <a href="../Login/Logout_view.php" class="logout">
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
                <img src="userPage.png">
            </a>
        </nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <h2><strong>Dashboard</strong></h2>
                    <ul class="breadcrumb">
                        <li>
                            
                        </li>
                        <li><i class='bx bx-refresh' ></i></li>
                        <li>
                            <a class="active" href="userPage.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
	</main>
    <br>
    <h4 class="text-2xl font-bold mb-4">Chore Status</h4>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">      
	<a href="chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <p class="text-lg font-bold">In Progress</p>
            <p class="text-2xl">5</p>
        </div>
	</a>

	<a href="chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <p class="text-lg font-bold">Incomplete</p>
            <p class="text-2xl">3</p>
        </div>
	</a>

	<a href="chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <p class="text-lg font-bold">Completed</p>
            <p class="text-2xl">10</p>
        </div>
	</a>
    </div>
	    <br>
	    <br>
            <h2 class="text-2xl font-bold mb-4">Recently Assigned Chores</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">User Name</th>
                        <th class="border border-gray-300 p-2">Family Role</th>
                        <th class="border border-gray-300 p-2">Date Assigned</th>
                        <th class="border border-gray-300 p-2">Date Completed</th>
                        <th class="border border-gray-300 p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 p-2">John Doe</td>
                        <td class="border border-gray-300 p-2">Mother</td>
                        <td class="border border-gray-300 p-2">2024-02-06</td>
                        <td class="border border-gray-300 p-2">-</td>
                        <td class="border border-gray-300 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded">View Assigned Chores</button>
                        </td>
                    </tr>

		    <tr>
                        <td class="border border-gray-300 p-2">John Doe</td>
                        <td class="border border-gray-300 p-2">Mother</td>
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