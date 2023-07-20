
<title>About Page of the Dumpyard Information Project</title>

<link rel="stylesheet" href="styles.css" />
<?php include './components/nav.php'; ?>
<!-- <div class="srch"> -->
             <!-- Section 1: Introduction -->
        <section class="py-5">
        <div class="container">
            <h2 class="text-center" style="padding-top:50px;">Welcome to Dumpyard Information Provider</h2>
            <p>
                We are committed to providing you with the most up-to-date and comprehensive information about dumpyards in your area.
                Our goal is to help you find the nearest and most suitable dumpyard for your waste disposal needs. Whether you are a
                homeowner, a business owner, or anyone in need of waste management solutions, we've got you covered.
            </p>
        </div>
        </section>
        <!-- Section 2: Our Mission -->
        <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Our Mission</h2>
            <p>
                At Dumpyard Information Provider, our mission is to create a more sustainable and cleaner environment by promoting
                responsible waste disposal practices. We strive to connect individuals and businesses with eco-friendly and efficient
                dumpyards that adhere to environmental regulations and ethical waste management practices.
            </p>
        </div>
        </section>
        <!-- Section 3: Why Choose Us -->
        <section class="py-5">
            <div class="container">
            <h2 class="text-center">Why Choose Us</h2>
            <ul>
                <li>Comprehensive Database: Our platform provides an extensive database of dumpyards, ensuring you have access to multiple options.</li>
                <li>Environmentally Conscious: We prioritize dumpyards that are committed to environmental sustainability and waste recycling.</li>
                <li>Easy to Use: Our user-friendly interface allows you to quickly search for dumpyards based on your location and waste disposal needs.</li>
                <li>Verified Information: We verify the details of each dumpyard to ensure you receive accurate and reliable information.</li>
                <li>Community-Driven: Our platform encourages user reviews and feedback, fostering a community that helps others make informed decisions.</li>
            </ul>
        </div>
        </section>
        <!-- Section 4: Contact Us -->
        <section class="bg-light py-5">
            <div class="container">
            <h1 class="text-center">Contact Us</h1>
            <p>
                Have questions or need assistance? Feel free to get in touch with our support team. We are here to help you find the
                best waste management solution for your specific requirements.
            </p>
            <p>Contact Email: info@dumpyardprovider.com</p>
            <div class="row cnct">
        <div class="col-md-5">

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
        </div>
        </section>
<!-- </div> -->
<?php include './components/footer.php'; ?>