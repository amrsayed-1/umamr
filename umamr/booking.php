<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $date = test_input($_POST["date"]);
    $time = test_input($_POST["time"]);
    $guests = test_input($_POST["guests"]);
    $comments = test_input($_POST["comments"]);
    $customer_email = test_input($_POST["customer_email"]);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    
    // Send email
    $to = $customer_email;
    $subject = "New Reservation";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nDate: $date\nTime: $time\nGuests: $guests\nComments: $comments";
    mail($to, $subject, $message);
    
    // Redirect to thank-you page
    header("Location: thankyou.php");
    exit();
}

// Helper function to sanitize form data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
