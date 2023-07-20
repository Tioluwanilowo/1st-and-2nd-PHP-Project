<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit();
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
   
    
    // Connect to MySQL database
    $conn = mysqli_connect('localhost', 'root', '', 'university');
    
    // Check if user with same email already exists
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $error_message = 'User with same email already exists';
    } else {
        // Hash password before storing in database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        
        // Insert user data into database
        $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
        mysqli_query($conn, $query);
        
        // Send verification code to user's phone (code not shown)
        
        // Store user ID in session
        $_SESSION['user_id'] = mysqli_insert_id($conn);
        
        // Redirect to verification page
        header('Location: dashboard.php');
        exit();
    }
}
?>


<?php include('./components/nav.php'); ?>

    <h1>Sign Up</h1>
    <?php if (isset($error_message)) { echo '<p>' . $error_message . '</p>'; } ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Usernmae:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <input type="submit" name="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.php">Log In</a></p>
</body>
</html>
