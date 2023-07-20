<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$conn = mysqli_connect('localhost', 'root', '', 'university');
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
// Connect to MySQL database
if(isset($_POST['type'])){
    print_r($_POST);
    $nm=$_POST['number'];
    $uid = $_SESSION['user_id'];
    echo $query = "UPDATE `users` SET phone='$nm' WHERE id='$uid' ";
    if(mysqli_query($conn, $query)){
        echo 'Updated successfully';
        echo '<script>console.log("done");</script>';
    }else{echo "error";};
    
    header('Location: dashboard.php');
}

// Retrieve user data from database
?>


<?php include('./components/nav.php'); ?>

<?php 
if($user['phone']==0){
    ?>
     <form action="dashboard.php" method="POST">
        <label>Update your Phone number:</label>
        <input name="number" type="tel">
        <input type="submit" name="type" value="Change">
    </form> 
    <?php
}else{
?>
    <div>
        <a href="">Details</a>
        <a href="">Subjects</a>
        <a href="">Phone</a>
            <h1>Welcome <?php echo $user['username']; ?></h1>
            <p>You are now connected to the most advanced database of the university</p>
            
            <p><a href="logout.php">Log Out</a></p>
    </div>
<?php
}
?>
</body>
</html>
