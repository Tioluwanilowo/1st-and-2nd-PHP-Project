
<link rel="stylesheet" href="styles.css" />
<style>
    
.form-group input,.form-group textarea{
    width:100%;
}

.btn-danger{
    float:right;
    color:white !important;
    margin-right:0px !important;
    margin-top:20px !important;
}    

.btn-danger a{
    color:white;
    text-decoration:none;
}
</style>
<?php include './components/nav.php'; ?>
<?php
// Include the database configuration file
require_once 'dbconfig.php';
session_start();
// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    // Redirect to the admin login page
    header("Location: admin_login.php");
    exit;
}

// Handle the dumpyard form submission

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $area = $_POST['area'];
    $location = $_POST['location'];
    $locality = $_POST['locality'];
    $maplocation = $_POST['maplocation'];
    $about = $_POST['about'];
    $i++;

    // Insert the dumpyard information into the database
    try {
        $stmt = $conn->prepare("INSERT INTO dumps (name,area, location, locality, maplocation, about) VALUES (:name, :area,:location, :locality,:maplocation,:about)");
 
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':area', $area);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':locality', $locality);
        $stmt->bindParam(':maplocation', $maplocation);
        $stmt->bindParam(':about', $about);
        $stmt->execute();

        // Redirect back to the admin dashboard with a success message
        header("Location: admin_dashboard.php?success=1");
        exit;
    } catch (PDOException $e) {
        die("Error inserting dumpyard information: " . $e->getMessage());
    }
}
?>

<!-- Admin dashboard with dumpyard insertion form -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <!-- Include CSS and other head elements -->
</head>
<body>
    <div class="container">
            <button class="btn btn-danger"><a href="logout.php">Logout</a></button>
        <div class="row">
        <div class="col-md-6 mx-auto my-5">
        <h2>Admin Dashboard</h2>
        <!-- Add a success message if a dumpyard was successfully added -->
        <?php if (isset($_GET['success'])) : ?>
            <p>Dumpyard information added successfully!</p>
        <?php endif; ?>
        <!-- Dumpyard insertion form -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="name">Dumpyard Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="area">Area:</label>
                <input type="text" id="location" name="area" required>
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="locality">Locality:</label>
                <input type="text" id="location" name="locality" required>
            </div>
                
            <div class="form-group">
                <label for="location">Map Location:</label>
                <textarea id="location" name="maplocation" required></textarea>
            </div>

            <div class="form-group">
                <label for="locality">Locality:</label>
                <textarea id="location" name="about" required></textarea>
            </div>

            <!-- <div class="form-group">
                <label for="details">Dumpyard Details:</label>
                <textarea id="details" name="details" required></textarea>
            </div> -->

            <button type="submit" class="btn btn-primary">Add Dumpyard</button>
        </form>
        </div>
        </div>
    </div>

<?php include './components/footer.php'; ?>