<?php
if(isset($_POST['Email'])) {

    $email_to = "mythface00@gmail.com";
    $email_subject = "contact";

    $email_message = "hi";
    $headers = 'hi';
    @mail($email_to, $email_subject, $email_message);

}
?>
