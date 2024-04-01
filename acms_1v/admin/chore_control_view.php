<?php


require_once('../settings/core.php');

include '../functions/chore_fxn.php';



if(!isLoggedIn()) {

    header("Location: ../view/register.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chores | Add New</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>  
	body {
    	    font-family: Arial, sans-serif;
	}

	#addNewChoreForm button {
    	    width: 100%;
	}

	table {
            width: 100%;
            margin-top: 20px;
        }



        th {
            padding: 5px; /* reduce padding */
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th:first-child {
            width: 33%; 
        }

        th:nth-child(2) {
            width: 33%; 
        }

        th:last-child {
            width: 33%; 
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
    	</style>
	
</head>
<body class="bg-light">
    <div class="container mt-5 mb-5">
        <h1 class="text-center">New Chore</h1>
        <form action="../action/add_chore_action.php" method="POST" id="addNewChoreForm">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name:</label>
                <input type="text" class="form-control" name="choreName" id="choreName" placeholder="Enter chore name" required pattern="[a-zA-Z\s]+" title="Chore name must contain only letters or spaces"/>
            </div>
            <button type="submit" class="btn btn-primary w-100">Create Chore</button>
        </form>
        
        <hr/>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Chore ID</th>
                    <th scope="col">Chore Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Call the function to display all chores -->
                <?php display_all_chores(); ?>
            </tbody>
        </table>
    </div>

    <div>
	<a href="adminDashBoard.php">
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'></i></button></strong></span>
	</a>
    </div>
    

</body>
</html>