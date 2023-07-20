<?php
// Include the database configuration file
require_once 'dbconfig.php';

// Check if the admin is already logged in
if (isset($_SESSION['admin_id'])) {
    // Redirect to the admin dashboard
    header("Location: admin_dashboard.php");
    exit;
}

// Handle the login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate admin credentials (you can use a more secure password hashing method)
    if ($username === 'admin' && $password === 'admin_password') {
        // Store the admin ID in the session to mark the admin as logged in
        $_SESSION['admin_id'] = 1;
        // Redirect to the admin dashboard
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Invalid login credentials, show an error message
        $error_msg = "Invalid username or password!";
    }
}
?>

<!-- Admin login form -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <!-- Include CSS and other head elements -->
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <?php if (isset($error_msg)) : ?>
            <p><?php echo $error_msg; ?></p>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>

    <!-- Include other scripts or footer elements -->
</body>
</html>
