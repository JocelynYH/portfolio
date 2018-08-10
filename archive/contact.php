   
<?php
    if($_POST['submit']) {
        $recipient='violetyell@yahoo.com';
        $subject='Message from Portfolio';
        $sender=$_POST['sender'];
        $senderEmail=$_POST['senderEmail'];
        $message=$_POST['message'];
        
        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
        
        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
        
        $thankYou = '<p>Thank you!  Your message has been sent.</p>';
    }
    
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>


<?= $thankYou ?>

<form method="post" action="contact.php">
        <label for="">Name</label>
        <input type="text" name='sender'>
        
        <label for="">Your Email:</label>
        <input type="email" name='senderEmail'>
        
        <label for="">Message:</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
    <input type="submit" name='submit'>
    <?= $thankYou ?>
</form>

    
</body>
</html>