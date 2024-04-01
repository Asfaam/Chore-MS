<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management System</title>
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('view/welcome.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center; 
            align-items: flex-start; 
        }
        .container {
            background-color: #ffcc00; 
            border-radius: 10px;
            padding: 20px;
            max-width: 500px;
            margin-top: 50px; 
        }
        h1 {
            color: black;
            text-align: center;
        }
        p {
            color: maroon;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #00cc00;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Chore Management System</h1>
        <p><b><em>Effortlessly manage your household chores with our easy-to-use platform</em></b></p>
        <a href="Login/login_view.php" class="btn">Login</a>
        <a href="Login/register_view.php" class="btn">Sign Up</a>
    </div>
</body>
</html>
