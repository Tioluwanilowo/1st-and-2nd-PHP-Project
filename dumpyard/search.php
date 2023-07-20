
<link rel="stylesheet" href="styles.css" />

<?php include './components/nav.php'; ?>


    <div class="container">
        <div class="srch">
        <h2>Find Dumpyard around you</h2>
        <form action="search.php" method="GET">
                <input type="text" name="location" class="search-input" placeholder="Enter your location">
                <input type="submit" value="Search" class="search-button">
        </form>
        
<?php if(isset($_GET['location']) & $_GET['location']!==''){ ?>
        
        <?php
        // Include the database configuration file
        require_once 'dbconfig.php';

        // $location = $_GET['location'];
        // Get the entered location from the form
        if (isset($_GET['location'])) {
            $location = $_GET['location'];
        } else {
            // Redirect to the search page if location is not provided
            header("Location: search.php");
            exit;
        }

        // Fetch dumpyard information based on the entered location
        try {
            // Use prepared statement with directly included user input
            $stmt = $conn->prepare("SELECT * FROM dumps WHERE location LIKE CONCAT('%', ?, '%')");
            $stmt->execute([$location]);
            $dumpyards = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching dumpyard information: " . $e->getMessage());
        }
        ?>
        <?php if (count($dumpyards) > 0) : ?>
            <?php echo '<h5>Search Results for Location: '. $location.'</h5>'; ?>
            <ol style="text-align:left;font-size:20px">
            <?php foreach ($dumpyards as $dumpyard) : ?>
            <li>
                <div class="row">
                    <div class="col-md-8">
                <h4><?php echo "Name of Dumpyard: " . $dumpyard['Name']; ?></h4>
                <p><?php echo $dumpyard['About']; ?></p>
                <p><?php echo "Area: ".$dumpyard['Area']; ?></p>
                <p><?php echo "Location: ".$dumpyard['Location']; ?></p>
                <p><?php echo "Locality: ".$dumpyard['Locality']; ?></p>
            </div>
            <div class="col-md-4" style="margin-top:30px;">
                <?php echo $dumpyard['MapLocation'];?>
            </div>
            </div>
                <!-- Add other dumpyard information as needed -->
            </li>
        <?php endforeach; ?>
            </ol>
        <?php else : ?>
            
            <p>No dumpyards found in the entered location.</p>
        <?php endif; ?>
        
        <!-- // if(isset($_GET['location'])){
        //     // Retrieve the user-entered location from the form submission
        //     $location = $_GET['location'];
            
        //     // Perform a search based on the location and fetch the dumpyard details from the database or API
        //     // Display the search results
        //     echo "<h2>Search Results for $location:</h2>";
        //     // Iterate over the results and display them
        //     echo "<ul>";
        //     // Example of displaying a dumpyard
        //     echo "<li><a href='dumpyard.php?id=1'>Dumpyard 1</a></li>";
        //     echo "<li><a href='dumpyard.php?id=2'>Dumpyard 2</a></li>";
        //     // ...
        //     echo "</ul>";
        // } -->
        <?php }else if($_GET['location']==''){ ?>  
            <p>Please Enter a location</p>
        <!-- <h2>Find Dumpyard around you</h2>
            <form action="search.php" method="GET">
                <input type="text" name="location" class="search-input" placeholder="Enter your location">
                <input type="submit" value="Search" class="search-button">
            </form> -->
            <?php }; ?>
    </div>
    </div>
<?php include './components/footer.php'; ?>