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