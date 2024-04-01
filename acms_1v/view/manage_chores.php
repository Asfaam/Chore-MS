<?php include '../functions/manage_chores_fxn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | Chore Management</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Global styles */
        body {
            font-family: Goudy Old Style, Arial, sans-serif;
            color: black;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Container styles */
        .welcome-container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        /* Sidebar styles */
        .sidebar {
            background-color: #333;
            color: #fff;
            width: 200px; /* Sidebar width */
            height: 100vh; /* Full height of viewport */
            position: fixed; /* Fix the sidebar to the left side */
            left: 0; /* Position at the leftmost side of the page */
        }

        .nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .nav-item {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #fff;
        }

        .nav-item:hover {
            background-color: #555;
        }

        .nav-item.active {
            font-weight: bold;
        }

        /* Content styles */
        .content {
            flex: 1; /* Take up remaining space */
            padding-left: 220px; /* Adjust content to accommodate sidebar width */
        }

        /* Header styles */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            color: #333;
        }

        /* Stats container styles */
        .stats-container {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .stat-box {
            text-align: center;
            text-decoration: none;
            color: #333;
            padding: 20px;
            border-radius: 5px;
            flex: 1; /* Equal width for each stat box */
        }

        .in-progress {
            background-color: #ffcc00;
        } /* In Progress style */

        .incomplete {
            background-color: #ff0000;
        } /* Incomplete style */

        .completed {
            background-color: #00cc00;
        } /* Completed style */

        .all-chores {
            background-color: #00FFFF;
        } /* All Chores style */

        /* Interactive section styles */
        .interactive-section {
            text-align: center;
            margin-bottom: 20px;
        }

         button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Footer styles */
        .footer {
            text-align: center;
            color: #777;
            padding: 20px 0;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    
            <div class="container">
                <div class="stats-container">
                    <a href="manage_chores.php" class="stat-box in-progress">
                        <h2>In Progress</h2>
                        <p><strong><?php display_chores_in_progress(); ?></strong></p>
                    </a>
                    <a href="manage_chores.php" class="stat-box incomplete">
                        <h2 style="color:white">Incomplete</h2>
                        <p><?php display_incomplete_chores(); ?></p>
                    </a>
                    <a href="manage_chores.php" class="stat-box completed">
                        <h2>Completed</h2>
                        <p><?php display_completed_chores(); ?></p>
                    </a>
                    <a href="manage_chores.php" class="stat-box all-chores">
                        <h2>All Chores</h2>
                        <p><strong><?php display_assigned_chores(); ?></strong></p>
                    </a>
                </div>
            </div>

	    
    	    <div>
		<a href="home_view.php">
                    <span style="float:right"><strong><button><i class='bx bx-chevron-left'></i></button></strong></span>
		</a>
    	    </div>


            <!-- Footer -->
            <footer class="footer">
                <!-- Updated the footer text -->
                <p>&copy; 2024 T&T Management. All rights reserved.</p>
            </footer>
        </div>
    </div>
</body>

</html>
