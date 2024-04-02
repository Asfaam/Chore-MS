<?php include '../functions/home_fxn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Assignment</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
	body {
	   background-color:beige;
 	   font-family: Goudy Old Style;
	   color: #2F4F4F;
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

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

td:last-child {
    text-align: center;
}

/* Responsive styles */
@media only screen and (max-width: 600px) {
    select, input[type="date"] {
        width: 100%;
    }
}
    </style>
</head>
<body>
    <table id="assignedChoresTable">
        <thead>
            <tr>
                
            </tr>
        </thead>
        <tbody>
            <?php display_chores_details(); ?>
        </tbody>
    </table>
	<div>
	<a href="home_view.php">
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'> Back </i></button></strong></span>
	</a>
    </div>
</body>
</html>