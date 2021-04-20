<?php

// Brett wrote this mailer from scratch

    header('refresh: 5; url=../contact.html');
    echo "<link href='../css/master.css' rel='stylesheet'><script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.3/lottie.js'></script><script src='../js/lottie_call.js'></script>"; // Calls CSS and Lottie through echo.
    
    $sender = $_POST['yourname'];
    $reply = $_POST['youremail'];
    $refer = $_POST['refertype'];
    $message = $_POST['yourmessage'];

    $recipient = "adv354@brettonfry.com";
    $subject = "A new contact on adv354.brettonfry.com from $sender";
    $mailhead = "From: $reply \r\n";

    mail($recipient, $subject, $message, $mailhead)
        or die("Failed.");
    echo "<div id='confirmation_page'><div id='animate'></div><div id='confirmation_page_text'><span class='heading'>Thank you for contacting us!</span><p>You will be redirected back to the contact page in 5 seconds.<br>If redirection does not work, click <a href='../contact.html'>here</a>.</p></div></div>";

?>

