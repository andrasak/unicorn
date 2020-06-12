<?php 
if(isset($_POST['submit'])) { 
$email = trim($_POST['email']);
$subject1 = trim($_POST['subject']);
$message = trim($_POST['message']);



if(!empty($email) && !empty($subject1) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $from = "$email";
        $to = "sonkeviciute@gmail.com";
        $subject = htmlspecialchars($subject1);
        $autorius = 'nuo: ' . $email;
        $zinute = htmlspecialchars($message);
        mail($to, $subject, $autorius, $zinute, $from);
        echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
    }
}   
include('db.php');
}
?>
