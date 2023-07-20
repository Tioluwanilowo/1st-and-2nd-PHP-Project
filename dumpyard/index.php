<link rel="stylesheet" href="styles.css">
    <?php include './components/nav.php'; ?>

        <header class="hero">
            <div class="hero-content">
                <h1>Welcome to Dumpyard Search</h1>
                <p>Find the best dumpyards in your area.</p>            
                <form action="search.php" method="GET">
                <input type="text" name="location" class="search-input" placeholder="Enter your location">
                <input type="submit" value="Search" class="search-button">
            </form>
            </div>
        </header>
        

    <div class="container">


        
        <h1>Main Dumpyard in HP</h1>

        <div class="section">
            <h2 class="section-title">Dumpyard in Kullu</h2>
            <p class="section-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lectus risus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lectus risus.</p>
        </div>

        <div class="section">
            <h2 class="section-title">Dumpyard in Shimla</h2>
            <p class="section-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lectus risus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lectus risus.</p>
        </div>

        

        <div class="section">
            <h2 class="section-title">Dumpyard in Dharamshala</h2>
            <p class="section-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lectus risus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lectus risus.</p>
        </div>

        <div class="section">
        <div class="row" style="justify-content: space-around;align-items: center;">
            <div class="col-md-4">
                <img src="./assests/images/img.png" class="img-fluid" alt="About Us Image">
            </div>
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>We are committed to providing you with the most up-to-date and comprehensive information about dumpyards in your area.
                Our goal is to help you find the nearest and most suitable dumpyard for your waste disposal needs. Whether you are a
                homeowner, a business owner, or anyone in need of waste management solutions, we've got you covered.</p>
            </div>
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

         <!-- Section 3: Project Description with Images -->
         <section class="bg-light py-5">
            <div class="container">
                <h2 class="text-center">About the Project</h2>
                <p>
                    The Dumpyard Information Provider is an ambitious project that aims to revolutionize waste management by providing an efficient and accessible platform for users to find dumpyards in their vicinity.
                </p>
                <p>
                    Our team of dedicated developers and environmental enthusiasts have worked tirelessly to create a platform that not only helps users find the nearest dumpyard but also promotes sustainable waste disposal practices.
                </p>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <img src="./assests/images/logo.png" class="img-fluid rounded" alt="Project Image 1" style="margin:auto;width:50%;display: flex;align-items: center;justify-content: center;">
                    </div>
                    <div class="col-md-6 mb-4">
                        <img src="./assests/images/img.png" class="img-fluid rounded" alt="Project Image 2"  style="margin:auto;width:50%;display: flex;align-items: center;justify-content: center;">
                    </div>
                </div>
                <p>
                    We believe that by providing accurate and reliable information about dumpyards and their waste management practices, we can contribute to a greener and cleaner environment. Our user-friendly interface and comprehensive database make it effortless for individuals and businesses to make informed decisions when it comes to waste disposal.
                </p>
                <p>
                    We envision a future where waste management is more sustainable, and every individual plays an active role in preserving our planet for generations to come.
                </p>
            </div>
        </section>

    <section class="py-5">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="./assests/images/logo2.png" class="card-img-top" alt="Image 1" style="width: 30%;margin: auto;padding-top: 20px;">
                        <div class="card-body">
                            <h5 class="card-title">Eco-Friendly Solutions</h5>
                            <p class="card-text">We prioritize dumpyards that follow eco-friendly waste management practices, contributing to a cleaner environment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="./assests/images/logo2.png" class="card-img-top" alt="Image 2" style="width: 30%;margin: auto;padding-top: 20px;">
                        <div class="card-body">
                            <h5 class="card-title">User-Friendly Interface</h5>
                            <p class="card-text">Our platform is designed with a user-friendly interface, making it easy to search and find dumpyards near you.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="row cnct">
        <div class="col-md-5">
            <h1>Contact Us</h1>

            <!-- Bootstrap Contact Form -->
            <form action="contact_form_handler.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
        <!-- <div class="search-form">
            <form action="search.php" method="GET">
                <input type="text" name="location" class="search-input" placeholder="Enter your location">
                <input type="submit" value="Search" class="search-button">
            </form>
        </div> -->

        
    </div>
    <?php include './components/footer.php'; ?>


