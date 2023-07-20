
    <title>Features of the Dumpyard Information Project</title>
    <!-- Include CSS and other head elements -->
    <link rel="stylesheet" href="styles.css">
 

    <!-- Include the navbar component -->
    <?php include './components/nav.php'; ?>

    <div class="container">
        <h1 class="my-5">Features of the Dumpyard Information Project</h1>

        <!-- <div class="row"> -->
        <!-- Feature 1: User Search -->
        <div class="row feature mx-auto my-5">
            <div class="col-md-2 feature-image">
                <img src="./assests/images/search.png" alt="User Search">
            </div>
            <div class="col-md-8 feature-description">
                <h2>User Search</h2>
                <p>
                    Users can search for dumpyards based on their desired location. The application retrieves dumpyard details matching the user's location query from the database.
                </p>
            </div>
        </div>
        <!-- </div> -->

        <!-- Feature 2: Admin Panel -->
        <div class="row feature mx-auto my-5">
            <div class="col-md-2 feature-image">
                <img src="./assests/images/admin.png" alt="Admin Panel">
            </div>
            <div class="col-md-8 feature-description">
                <h2>Admin Panel</h2>
                <p>
                    The project includes a secure admin panel accessible only to authorized administrators. After successful login, administrators can add new dumpyards to the database using the user-friendly interface.
                </p>
            </div>
        </div>

        <!-- Feature 3: Display Dumpyard Information -->
        <div class="row feature mx-auto my-5">
            <div class="col-md-2 feature-image">
                <img src="./assests/images/info.png" alt="Display Dumpyard Information">
            </div>
            <div class="col-md-8 feature-description">
                <h2>Display Dumpyard Information</h2>
                <p>
                    The application displays detailed information about each dumpyard found in the search results. Users can view dumpyard names, areas, locations, localities, and an embedded Google Map showing the dumpyard's location.
                </p>
            </div>
        </div>

        <!-- Feature 4: Responsive Design -->
        <div class="row feature mx-auto my-5">
            <div class="col-md-2 feature-image">
                <img src="./assests/images/res.png" alt="Responsive Design">
            </div>
            <div class="col-md-8 feature-description">
                <h2>Responsive Design</h2>
                <p>
                    The web application is designed to be responsive and mobile-friendly, ensuring an optimal user experience across various devices, including desktops, tablets, and smartphones.
                </p>
            </div>
        </div>

        <!-- Feature 5: Validation and Error Handling -->
        <div class="row feature mx-auto my-5">
            <div class="col-md-2 feature-image">
                <img src="./assests/images/error.png" alt="Validation and Error Handling">
            </div>
            <div class="col-md-8 feature-description">
                <h2>Validation and Error Handling</h2>
                <p>
                    The project employs form validation to ensure that all required fields are filled out correctly. Additionally, error handling is implemented to provide meaningful error messages to users in case of any issues during form submission.
                </p>
            </div>
        </div>

        <div class="feature technologies">
            <h2>Technologies Used</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Bootstrap</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>PDO (PHP Data Objects)</li>
                <li>Google Maps API</li>
                <li>Session Management</li>
            </ul>
            <p>
                The Dumpyard Information Project utilizes a variety of technologies to create a seamless and efficient user experience. The combination of these technologies enables the application to provide users with accurate and up-to-date information about dumpyards in their desired locations.
            </p>
        </div>

    </div>

    <!-- Include the footer component -->
    <?php include './components/footer.php'; ?>

