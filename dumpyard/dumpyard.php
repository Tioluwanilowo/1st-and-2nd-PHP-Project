
<link rel="stylesheet" href="styles.css" />
<?php include './components/nav.php'; ?>
<div class="container">
<?php
if(isset($_GET['id'])){
    $dumpyardId = $_GET['id'];
    
    // Retrieve the dumpyard details based on the ID from the database or API
    // Display the dumpyard details
    echo "<h2>Dumpyard Details</h2>";
    echo "<p>ID: $dumpyardId</p>";
    echo "<p>Name: Dumpyard $dumpyardId</p>";
    // Display other details like location, contact information, etc.
}
?>
</div>

<?php include './components/footer.php'; ?>