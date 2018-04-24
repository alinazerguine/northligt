<?php   
    session_start();

    include("dbconnect.php");
    $errors = array();

    if (!isset($_SESSION['userid'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: main_login.php');
    }
    
    if (isset($_POST['Import'])) {
        $filename = $_FILES['file']['tmp_name'];

        if ($_FILES['file']['size'] > 0) {

            $file = fopen($filename, 'r');  
            $userid = $_SESSION['userid'];
            $n = 0;
            $dup = 0;
            while ( ($getData = fgetcsv($file, 10000, ',')) !== FALSE) {
                if (validateEmail($getData[0])) {  //validate Email address
                    $email = $getData[0];
                    $email_check_query = "SELECT * FROM target_tbl WHERE userid=$userid AND email='$email'";
                    $result = mysqli_query($link, $email_check_query);
                    $exist = mysqli_fetch_assoc($result);
            
                    if ($exist) {  // if duplicate check email
                        $dup ++;  
                    } else {
                        $query = "INSERT into target_tbl (email, userid) VALUES ('".$email."', '$userid')";
                        mysqli_query($link, $query);

                        insert_To_emailtargettbl($link, $email, $userid);
                        $n ++;
                    }                    
                }               

            }
            fclose($file);
            array_push($errors, $n." emails are successfully added, ".$dup." emails are duplicated");
        }
    }
    if (isset($_POST['text_sub'])) {
        $input = $_POST['import_text'];
        if (strlen($input) == 0){
            array_push($errors, "required emails.");
        } else {
            $emails = explode("\n", str_replace("\r", "", $input));
            
            $userid = $_SESSION['userid'];
            $n = 0;
            $dup = 0;
            foreach ($emails as $email) {
                
                if (validateEmail($email)) {  //validate Email address
                    
                    $email_check_query = "SELECT * FROM target_tbl WHERE userid=$userid AND email='$email'";
                    $result = mysqli_query($link, $email_check_query);
                    $exist = mysqli_fetch_assoc($result);
            
                    if ($exist) {  // if duplicate check email
                        $dup ++;  
                    } else {
                        $query = "INSERT into target_tbl (email, userid) VALUES ('".$email."', '$userid')";
                        mysqli_query($link, $query);
                        insert_To_emailtargettbl($link, $email, $userid);
                        $n ++;
                    }
                }
                
            }
            array_push($errors, $n." emails are successfully added, ".$dup." emails are duplicated");
        }
   
    }
    function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function generateEmail($company, $url){
        $message = '<p>Greetings</p>'.
            '<p>On behalf of your '.$company.', North light conducts a survey of customer satisfaction. '.$company.' has provided us with your e-mail address.</p>'.
            '<p>Your participation is of course voluntary, but your opinion can help '.$company.' to improve its service.</p>'.
            '<p>Therefore, it would be helpful if you wanted to participate in the survey.</p>'.
            '<p>Click on the link below to start:</p>'.
            '<p><a href="#">'. $url . '</></p>'.
            '<p>Thank you for your participation.</p>';
        return $message;
    }
    /**
     * Insert Data to emailtotarget_tbl with parameters
     * 
     */
    function insert_To_emailtargettbl($link, $target_email, $userid) {
        $placeid = "";
        $company = "";
        $url = "links here";

        //Get placeid and company name by userid
        $query = "SELECT * FROM users_tbl WHERE userid=".$userid;
        $results = mysqli_query($link, $query);
        if (mysqli_num_rows($results) == 1) {
            $user = mysqli_fetch_assoc($results);
            $placeid = $user["placeid"];
            $company = $user["company_name"];
        }
        $date = date('Y-m-d H:i:s'); //current date time
        $email_content = generateEmail($company, $url);
        //insert to emailtotarget_tbl
        $query = "INSERT into emailtotarget_tbl (target_email, userid, company_name, placeid, email_content, creation_timestamp) VALUES ('".$target_email."', '$userid', '$company', '$placeid','$email_content', '$date')";
        mysqli_query($link, $query);
    }