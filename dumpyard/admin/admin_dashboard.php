
<!-- <link rel="stylesheet" href="styles.css" /> -->

<?php include '../components/nav.php'; ?>
<?php
// Include the database configuration file
require_once 'dbconfig.php';

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
    $i++;

    // Insert the dumpyard information into the database
    try {
        $stmt = $conn->prepare("INSERT INTO dumps (name,area, location, locality) VALUES (:name, :area,:location, :locality)");
 
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':area', $area);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':locality', $locality);
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

            <!-- <div class="form-group">
                <label for="details">Dumpyard Details:</label>
                <textarea id="details" name="details" required></textarea>
            </div> -->

            <button type="submit" class="btn">Add Dumpyard</button>
        </form>
    </div>

<?php include '../components/footer.php'; ?>