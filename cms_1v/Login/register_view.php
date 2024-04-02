<?php include '../functions/select_role_fxn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Chore-MS|Login-SignUp</title>
    <link rel="stylesheet" href="../css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="../action/register_user_action.php" method="POST" name="signUpForm" id="signUpForm">
                <h3 >Create Account</h3>
                <div class="social-icons">
                    <a href="#" class="icon1"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon2"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon3"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon4"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Enter First Name" name="fname" id="firstName" required>
                <input type="text" placeholder="Enter Last Name" name="lname" id="lastName" required>
                <input type="email" placeholder="Enter Email" name="email" id="email2" required>
                <button>
                <label for="gender"><b>Dob | Sex | Role </b></label><br>
                <input type="date" placeholder="Enter Date of Birth" name="dob" id="dob" required>
                <div class="row" required>
                    <div class="gender-radio">
                        <input type="radio" name="gender" id="male" value="0"> Male
                    </div>
                    <div class="gender-radio">
                    <input type="radio" name="gender" id="female" value="1"> Female
                    </div> <br><br>
                    <!-- Family role dropdown -->
        	    <select name="family_role" id="family_role" required>
            		<?php while($row = mysqli_fetch_assoc($result)): ?>
                	    <option value="<?php echo $row['fid']; ?>"><?php echo $row['fam_name']; ?></option>
            		<?php endwhile; ?>
        	    </select>
                </div>
                </button>
                <input type="tel" placeholder="Enter Phone Number" name="tel" id="phone" required>
                <input type="password" placeholder="Enter Password" name="password" id="pswd" required>
                <input type="password" placeholder="Confirm Password" name="password_confirm" id="pswd-repeat" required>
                <button type="submit" class="registerbtn" id="register2" onclick="return validateRegistration()">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="../action/login_user_action.php" method="POST" name="loginForm" id="loginForm">
                <h3>Sign In</h3>
                <div class="social-icons">
                    <a href="#" class="google"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="github"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email & password</span><br>
                <div class="input-box">
                    <i class='bx bxs-user'></i>
                    <input type="email" placeholder="Email" name="email" id="email1" required>
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" placeholder="Password" name="password" id="psw" required>  
                </div>
                <div class="remember-forgot">
                    <span style="float:left;">
                        <input type="checkbox"><b>Remember me</b>
                    </span>
                    <span class="spacer" style="float:right;"></span><br><br>
                    <a href="#" class="forgot-password"><u><b>Forgot Your Password?</b></u></a>
                </div> 
                <button type="submit" id="btn" onclick="return validateLogin()">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h3>Don't have an account?</h3>
                    <p>Enter your personal details to register ➡️</p>
                    <p>Already have an account<br><button class="hidden" id="login">Sign In</button></p>
                </div>
                <div class="toggle-panel toggle-right">
                    <h3>🎯 Jobfits Chores</h3>
                    <p>Register with your personal details here ⬇️</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/register.js"></script>
</body>

</html>