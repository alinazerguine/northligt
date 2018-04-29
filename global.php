<?php
    /**
     * Send Email Function
     */
    function sendEmail($email, $content){
        
        $to = $email;
        $subject = 'Subject';
        $message = $content;
        $headers = 'If you have any questions, please contact the North light:' . "\r\n" .
        'From: helpdesk@northlight.se' . "\r\n" .
        'Reply-To: helpdesk@northlight.se' . "\r\n" .
        '+46 000 00 00 00';
        echo $message;
        return true;
        // return mail($to, $subject, $message, $headers);

    }

    
    function generateEmail($company, $url){
        $message = '<p>Greetings</p>'.
            '<p>On behalf of your '.$company.', North light conducts a survey of customer satisfaction. '.$company.' has provided us with your e-mail address.</p>'.
            '<p>Your participation is of course voluntary, but your opinion can help '.$company.' to improve its service.</p>'.
            '<p>Therefore, it would be helpful if you wanted to participate in the survey.</p>'.
            '<p>Click on the link below to start:</p>'.
            '<p><a href="'. $url .'">'. $url . '</a></p>'.
            '<p>Thank you for your participation.</p>';
        return $message;
    }
?>