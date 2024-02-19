<?php include '../functions/select_role_fxn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <!-- Your HTML form here with the family role dropdown -->
    <form action="../action/register_user_action.php" method="POST">
        <!-- Family role dropdown -->
        <select name="family_role" id="family_role">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <option value="<?php echo $row['fid']; ?>"><?php echo $row['fam_name']; ?></option>
            <?php endwhile; ?>
        </select>
        <!-- Other form inputs -->
        <!-- Ensure all validation is working -->
        <!-- Register button -->
        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>
