<<<<<<< HEAD
if (isset($_POST['submit'])){
    $to = "somyamaheshwari22@gmail.com"; // recipient's email address
    $subject = "New message from Contact Form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "From: $name\nEmail: $email\n\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect to thank-you page
    header('Location: thank-you.html');
    exit();
}
=======
if (isset($_POST['submit'])){
    $to = "somyamaheshwari22@gmail.com"; // recipient's email address
    $subject = "New message from Contact Form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "From: $name\nEmail: $email\n\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect to thank-you page
    header('Location: thank-you.html');
    exit();
}
>>>>>>> master
