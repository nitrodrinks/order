<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected drink from the POST data
    if (isset($_POST['drink'])) {
        $drink = $_POST['drink'];

        // Email details
        $to = 'brayden291213@gmail.com'; // Replace with your actual email address
        $subject = 'Drink Selection';
        $message = 'The customer selected: ' . $drink;
        $headers = 'From: person' . "\r\n" .
                   'Reply-To: person' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        // Send the email
        $mailSent = mail($to, $subject, $message, $headers);

        // Check if the email was sent successfully
        if ($mailSent) {
            echo 'Email sent successfully.';
        } else {
            echo 'Failed to send email.';
        }
    } else {
        echo 'No drink selected.';
    }
} else {
    // Handle the case where the request method is not POST
    echo 'Invalid request.';
}
?>
