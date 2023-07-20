<?php
session_start();

// Redirect to signup page if OTP not set
if (!isset($_SESSION['otp'])) {
    header("Location: index.php");
    exit;
}

// Handle verification form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify'])) {
    $otp = $_POST['otp'];

    // Check if OTP is correct
    if ($otp == $_SESSION['otp']) {
        // OTP is correct, insert user data into database
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $phone = $_SESSION['phone'];

        // Insert user data into database
        $sql = "INSERT INTO users (username, email, password, phone) VALUES ('$username', '$email', '$password', '$phone')";
        mysqli_query($conn, $sql);

        // Redirect to login page
        header("Location: login.php");
        exit;
    } else {
        // OTP is incorrect
        $error_message = "Incorrect OTP, please
        try again";
    }
    }
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Verify Phone Number</title>
    </head>
    <body>
        <h1>Verify Phone Number</h1>
        <?php if (isset($error_message)) { echo '<p>' . $error_message . '</p>'; } ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="otp">Enter OTP sent to your phone:</label>
            <input type="text" name="otp" required><br>
            <input type="submit" name="verify" value="Verify">
        </form>
    </body>
    </html>