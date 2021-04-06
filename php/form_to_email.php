<?php 
if(isset($_POST['submit'])){
    $to = "info@renforthracquet.club"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $player_name = $_POST['player_name'];
    $birth_year = $_POST['birth_year'];
    $parent_name = $_POST['parent_name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $subject = "Renforth Racquet Club | Registration | Spring 2021";
    $message = "The following information was successfully submitted:\n" . "\n    Player: " . $player_name . "\n    Birth Year: " . $birth_year . "\n    Parent/Guardian: " . $parent_name . "\n    Address: " . $address . "\n    Phone: " . $phone . "\n    Email: " . $from . "\n\nA representative from the club will be in touch within 48 hrs to confirm your registration"; 
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message,$headers2); // sends a copy of the message to the sender
    echo "Your information has been submitted. We will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
