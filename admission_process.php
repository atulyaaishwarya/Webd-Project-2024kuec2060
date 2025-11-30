<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $studentName = htmlspecialchars($_POST['studentName']);
    $age = htmlspecialchars($_POST['age']);
    $grade = htmlspecialchars($_POST['grade']);
    $parentName = htmlspecialchars($_POST['parentName']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);

    // Display submitted data
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Admission Submission</title>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f5f8fa; padding: 20px; }
            .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
            h1 { color: #004080; text-align: center; }
            p { margin: 10px 0; }
            .back-btn { display: block; text-align: center; margin-top: 20px; }
            .back-btn a { background: #004080; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; }
            .back-btn a:hover { background: #003366; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Admission Application Submitted Successfully!</h1>
            <p><strong>Student Name:</strong> $studentName</p>
            <p><strong>Age:</strong> $age</p>
            <p><strong>Grade Applying For:</strong> $grade</p>
            <p><strong>Parent/Guardian Name:</strong> $parentName</p>
            <p><strong>Contact Number:</strong> $contact</p>
            <p><strong>Email Address:</strong> $email</p>
            <p><strong>Address:</strong> $address</p>
            <div class='back-btn'>
                <a href='home.html'>Back to Home</a>
            </div>
        </div>
    </body>
    </html>";
} else {
    // If not POST, redirect to home
    header("Location: home.html");
    exit();
}
?>
