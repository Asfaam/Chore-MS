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
            <i class='bx bx-user'></i>
            <span class="text"><strong>admin|@Faisal</strong></span>
        </a>

        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text"><strong>Home</strong></span>
                </a>
            </li>
            <li>
                <a href="add_chore.php">
                    <i class='bx bx-task' ></i>
                    <span class="text"><strong>Chore Management ➡️</strong></span>
                </a>
            </li>
	    <li>
                <a href="chore_assignment.php">
                    <i class='bx bx-task' ></i>
                    <span class="text"><strong>Chore Assignment ➡️</strong></span>
                </a>
            </li>
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
                    <h1>Dashboard</h1>
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
   
    <br>
    <h1 class="text-2xl font-bold mb-4">Chore Status</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">      
	<a href="admin_chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <p class="text-lg font-bold">In Progress</p>
            <p class="text-2xl">5</p>
        </div>
	</a>

	<a href="admin_chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <p class="text-lg font-bold">Incomplete</p>
            <p class="text-2xl">3</p>
        </div>
	</a>

	<a href="admin_chore_management.php">
        <div class="p-4 bg-white shadow-md rounded-md">
            <p class="text-lg font-bold">Completed</p>
            <p class="text-2xl">10</p>
        </div>
	</a>
    </div>
	    
    </body>
</html>