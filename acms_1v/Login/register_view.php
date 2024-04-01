<?php include '../functions/select_role_fxn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>JobFits/ Chore management/ Register</title>
    <link rel="stylesheet" href="../css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Add your CSS styles here */
        .login-link {
            text-decoration: none;
            color: #0080FF;
            font-weight: bold;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form name="signUpForm" action="../action/register_user_action.php" method="post">
                <div class="error-message" id="error-all-fields">Please fill out all fields.</div>
                <input type="text" placeholder="Enter First Name" name="fname" id="firstName" required>
                <input type="text" placeholder="Enter Last Name" name="lname" id="lastName" required>
                <input type="email" placeholder="Enter Email" name="email" id="email2" required>
                <div class="error-message" id="error-email">Please enter a valid email address.</div>
                <br>
                <label for="gender"><b> Dob </b></label><br>
                <input type="date" placeholder="Enter Date of Birth" name="dob" id="dob" required>
                <div class="error-message" id="error-phone">Please enter a valid 10-digit phone number.</div>
                <br><br>
                <label for="gender"><b> Sex </b></label><br>
                <div class="row" required>
                    <div class="gender-radio">
                        <input type="radio" name="gender" id="male" value="0"> Male
                    </div>
                    <div class="gender-radio">
                        <input type="radio" name="gender" id="female" value="1"> Female
                    </div>
                    <br><br>
                    <label for="gender"><b> Role </b></label><br>
                    <!-- Family role dropdown -->
                    <select name="family_role" id="familyRole" required>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <option value="<?php echo $row['fid']; ?>"><?php echo $row['fam_name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <input type="tel" placeholder="Enter Phone Number" name="tel" id="phone" required>
                <input type="password" placeholder="Enter Password" name="password" id="pswd" required>
                <input type="password" placeholder="Confirm Password" name="confirm-password" id="pswd-repeat" required>
                <div class="error-message" id="error-password-match">Passwords do not match.</div>
                <button type="submit" class="registerbtn" id="register2">Sign Up</button>
            </form>
        </div>
        
        <!-- Login button -->
        <div class="login-container">
            <p>Already have an account? <a href="login_view.php" class="login-link">Log in</a></p>
        </div>
    </div>

    <script src="../js/register_view.js"></script>
</body>

</html>
