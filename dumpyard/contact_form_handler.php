<?php
// contact_form_handler.php
$x=0;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form_submit'])) {
    // require_once('wp-load.php'); // Load the WordPress environment to use wp_mail()

    // Sanitize user inputs
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate user inputs (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo '<p>Please fill in all the required fields.</p>';

    } else {
        // Admin email address (change this to the actual admin email)
        // $admin_email = 'urcareerzonehelp@gmail.com';
        // Email subject
        $x=1;
        $subject = 'New Contact Form Submission from ' . $name;

        // Email body
        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Message:\n$message\n";

        // Email headers
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . $name . ' <' . $email . '>',
            'Reply-To: ' . $email,
        );

        // Send the email
        // $sent = wp_mail($admin_email, $subject, $body, $headers);

        if ($x) {
            header("location: contact.php");
            echo '<p>Your message has been sent successfully. Thank you!</p>';
        } else {
            echo '<p>Failed to send the message. Please try again later.</p>';
        }
    }
}
