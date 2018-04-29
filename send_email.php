<?php
    /** 
     * Cron Job PHP Point
     * Check "Email_sent" is "N"
     * Every Monday
     */
    session_start();

    include("dbconnect.php");
    include("global.php");
    $errors = array();

    if (!isset($_SESSION['userid'])) {
		header('location: main_login.php');
    }

    $sql = "SELECT * FROM emailtotarget_tbl WHERE email_sent='N'";
    $sth = mysqli_query($link, $sql);

    $sent_email_count = 0;

    while ($r = mysqli_fetch_assoc($sth)) {
        $eid = $r['eid'];
        $email_address = $r['target_email'];
        $email_content = $r['email_content'];
        $date = date('Y-m-d H:i:s'); //current date time
        if (sendEmail($email_address, $email_content)) {

            $update_query = "UPDATE emailtotarget_tbl SET email_sent='Y', sent_timestamp='$date' WHERE eid=".$eid;
            mysqli_query($link, $update_query);
            $sent_email_count ++;

        }
        
    }
    echo $sent_email_count. " emails are successfully sent.";



?>