<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit();
}

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    // Connect to MySQL database
    $conn = mysqli_connect('localhost', 'root', '', 'university');
    
    // Check if user with given email exists
    $query = "SELECT * FROM users WHERE username = '$user'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
        $error_message = 'Invalid email or password';
    } else {
        $user = mysqli_fetch_assoc($result);
        // Check if password matches
        if (password_verify($password, $user['password'])) {
            // Store user ID
            $_SESSION['user_id'] = $user['id'];
        
            // Redirect to dashboard page
            header('Location: dashboard.php');
            exit();
        } else {
            $error_message = 'Invalid email or password';
        }
    }

}
?>

<?php include('./components/nav.php'); ?>

    <h1>Log In</h1>
    <?php if (isset($error_message)) { echo '<p>' . $error_message . '</p>'; } ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Username:</label>
        <input type="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Log In">
    </form>
    <p>Don't have an account? <a href="index.php">Sign Up</a></p>
</body>
</html>