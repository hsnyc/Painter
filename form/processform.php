<?php


    $errors = array();
    $missing = array();


    // check if form has been submitted
    if (!empty($_POST['go'])) {


            // email processing script
            $to = 'hsnyc@henrysanchez.net'; //my e-mail
            $subject = 'Free Estimate Lead';

            //list expected fields
            $expected = array('name','email','tel');

            //Required fields
            $required = array('name','email','tel');

            //Create additional headers
            $headers = "From: Pro Painters<painter@hsnyc.co>\r\n";
            $headers .= 'Content-Type: text/plain; charset=utf-8';

            //process mail
            include 'form/processmail.php';

            if ($mailSent) {
                header('Location: thank-you.php');
                exit;
            }

    }

?>
