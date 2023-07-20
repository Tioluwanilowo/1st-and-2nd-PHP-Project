
<title>Contact Page of the Dumpyard Information Project</title>

<link rel="stylesheet" href="styles.css" />
<?php include './components/nav.php'; ?>

<div class="container">
            <h1 class="text-center" style="padding-top:50px;">Contact Us</h1>
            <p>
                Have questions or need assistance? Feel free to get in touch with our support team. We are here to help you find the
                best waste management solution for your specific requirements.
            </p>
            <p>Contact Email: info@dumpyardprovider.com</p>
    <div class="row cnct">
        <div class="col-md-5">
            <!-- <h1>Contact Us</h1> -->

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
<?php include './components/footer.php'; ?>