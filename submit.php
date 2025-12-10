<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = htmlspecialchars($_POST['name']);
    $email  = htmlspecialchars($_POST['email']);
    $phone  = htmlspecialchars($_POST['phone']);
    $dob    = htmlspecialchars($_POST['dob']);
    $course = htmlspecialchars($_POST['course']);

    echo "
    <div style='background:#f7f7f7; padding:15px; border-radius:8px; border:1px solid #ccc;'>
      <h3>Registration Successful!</h3>
      <p><strong>Name:</strong> $name</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Phone:</strong> $phone</p>
      <p><strong>Date of Birth:</strong> $dob</p>
      <p><strong>Course:</strong> $course</p>
    </div>";
}
?>
