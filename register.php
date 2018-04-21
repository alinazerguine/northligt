<?php
    session_start();
 
    include("dbconnect.php");
    $errors = array();

    if (isset($_POST['Submit']) && isset($_POST['myusername']) && isset($_POST['myuseremail']) && isset($_POST['mypassword']) && isset($_POST['mycompany']) && isset($_POST['myplaceid'])) {
        $username = mysqli_real_escape_string($link, $_POST['myusername']);
        $email = mysqli_real_escape_string($link, $_POST['myuseremail']);
        $password = mysqli_real_escape_string($link, $_POST['mypassword']);
        $company = mysqli_real_escape_string($link, $_POST['mycompany']);
        $placeid = mysqli_real_escape_string($link, $_POST['myplaceid']);

        $user_check_query = "SELECT * FROM users_tbl WHERE username='$username' OR email='$email'";
        $result = mysqli_query($link, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if($user) {  // if user exists
            if ($user['username'] === $username){
                array_push($errors, "Username already exists");
            }

            if($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }
        $date = date('Y-m-d H:i:s');
        if (count($errors) == 0) {
            $password = md5($password); //encrypt the password before saving in the database

            $query = "INSERT INTO users_tbl (username, email, userpass, company_name, placeid, creation_timestamp) VALUES('$username', '$email', '$password', '$company', '$placeid', '$date')";
            mysqli_query($link, $query);
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = mysqli_insert_id($link);
            $_SESSION['success'] = "You are now logged in";

            //Send welcome email
            // $to = $email;
            // $subject = 'Subject';
            // $message = '<p>Greetings</p>'.
            //             '<p>On behalf of your '.$company.', North light conducts a survey of customer satisfaction. '.$company.' has provided us with your e-mail address.</p>'.
            //             '<p>Your participation is of course voluntary, but your opinion can help '.$company.' to improve its service.</p>'.
            //             '<p>Therefore, it would be helpful if you wanted to participate in the survey.</p>'.
            //             '<p>Click on the link below to start:</p>'.
            //             '<p><a href="#">url</></p>'.
            //             '<p>Thank you for your participation.</p>';
            // $headers = 'If you have any questions, please contact the North light:' . "\r\n" .
            // 'From: helpdesk@northlight.se' . "\r\n" .
            // 'Reply-To: helpdesk@northlight.se' . "\r\n" .
            // '+46 000 00 00 00';
            
            // mail($to, $subject, $message, $headers);
            // end send email

            header('location: profile.php');
        }
    }
    //Login User
    if (isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($link, $_POST['myusername']);
        $password = mysqli_real_escape_string($link, $_POST['mypassword']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "password is required");
        }
        
        if (count($errors) == 0 ) {
            $password = md5($password);
            $query = "SELECT * FROM users_tbl WHERE username='$username' AND userpass='$password'";
            $results = mysqli_query($link, $query); 
            if (mysqli_num_rows($results) == 1) {
                $user = mysqli_fetch_assoc($results);
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $user['userid'];
                $_SESSION['success'] = "You are now loggged in";
                header('location: profile.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
    //Edit profile
    if (isset($_POST['edit_profile']) && isset($_POST['myusername']) && isset($_POST['myuseremail'])) {
        $username = mysqli_real_escape_string($link, $_POST['myusername']);
        $email = mysqli_real_escape_string($link, $_POST['myuseremail']);
        $address = mysqli_real_escape_string($link, $_POST['myaddress']);
        $phone = mysqli_real_escape_string($link, $_POST['myphone']);
        $company = mysqli_real_escape_string($link, $_POST['mycompany']);
        $placeid = mysqli_real_escape_string($link, $_POST['myplaceid']);

        if ($company == '') {
            array_push($errors, "Company name is required.");
        }
        if ($placeid == '') {
            array_push($errors, "Placeid is required.");
        }

        $user_check_query = "SELECT * FROM users_tbl WHERE (username='$username' OR email='$email') AND userid <>".$_SESSION['userid'];
        // echo $user_check_query; exit;
        $result = mysqli_query($link, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if($user) {  // if user exists
            if ($user['username'] === $username){
                array_push($errors, "Username already exists");
            }

            if($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        $date = date('Y-m-d H:i:s');
        if (count($errors) == 0) {
            $password = md5($password); //encrypt the password before saving in the database
            $query = "UPDATE users_tbl SET username='$username', email='$email', address='$address', phone='$phone', placeid='$placeid', edited_timestamp='$date' WHERE userid=".$_SESSION['userid'];
            mysqli_query($link, $query);


            // header('location: profile.php');
        }
    }

