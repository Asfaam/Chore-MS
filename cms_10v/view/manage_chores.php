<?php include '../functions/manage_chores_fxn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore-MS|Manage-Chores</title>
    <!-- Integrate Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body {
            font-family: Goudy Old Style;
            background-color: beige;
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
    <h1 class="text-2xl font-bold mb-4" style="color:maroon; font-size:24; text-align:center"><em>VIEW ALL IN-COMPLETE, IN PROGRESS AND COMPLETED CHORES</em></h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mx-auto max-w-6xl">
       
	<div class="p-4 bg-white shadow-md rounded-md">
            <li class="incomplete"><span class="icon">&#x274C;</span><p class="text-lg font-bold" style="color:white"><em>Incomplete</em></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_incomplete_chores(); ?></strong></p>
        </div>

        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="in-progress"><span class="icon">&#x270F;</span><p class="text-lg font-bold"><em>In Progress</em></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_chores_in_progress(); ?></strong></p>
        </div>

        <div class="p-4 bg-white shadow-md rounded-md">
            <li class="complete"><span class="icon">&#x2714;</span><p class="text-lg font-bold"><em>Completed</em></p></li>
            <p class="text-2xl" style="color:blue"><strong><?php display_completed_chores(); ?></strong></p>
        </div>

	<div class="p-4 bg-white shadow-md rounded-md">
            <ul>
                <li class="assigned-chores"><span class="icon">&#x2611;</span><p class="text-lg font-bold"><em>All Chores</em></p></li>
            </ul>
            <p class="text-2xl" style="color:blue"><strong><?php display_assigned_chores(); ?></strong></p>
        </div>

    </div>
    
    <div>
	<a href="home_view.php">
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'> Back </i></button></strong></span>
	</a>
    </div>

</body>

</html>
