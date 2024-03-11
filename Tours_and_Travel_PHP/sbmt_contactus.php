<?php
// Check if form is submitted
include('function.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['t1'];
    $contact = $_POST['t2'];
    $email = $_POST['t3'];
    $message = $_POST['t4'];

    // Process form data (perform validation, database operations, etc.)

    // For demonstration, just echoing back the submitted data
    
    $cn=makeconnection();
    $s="insert into contactus(Name,Phno,Email,Message) values('" . $name ."','" . $contact ."','" . $email ."','" . $message ."')";
    mysqli_query($cn,$s);
    mysqli_close($cn);
    echo "Name: $name, Contact: $contact, Email: $email, Message: $message";

} else {
    // If form is not submitted, return an error message
    echo "Error: Form not submitted.";
}
?>
