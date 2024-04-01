<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <div class="container">
      <form name="loginForm" action="../action/login_user_action.php" method = "post" onsubmit="return validateForm()">
        <h1>Login</h1>

        <div class="input-box">
          <input type="email" placeholder="email" name="email" required />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name="password" required />
          <!-- <i class="bx bxs-lock-alt"></i> -->
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox" /> Remember me</label>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
          <p>Don't have an account? <a href="register_view.php">Register here!</a></p>
        </div>
      </form>
    </div>

  <script>
      function validateForm() {
        var email = document.forms["loginForm"]["email"].value;
        var password = document.forms["loginForm"]["password"].value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === "" || !emailRegex.test(email)) {
          alert("Please enter a valid email address");
          return false;
        }

        if (password === "") {
          alert("Please enter your password");
          return false;
        }
      }
    </script>

  </body>
</html>
