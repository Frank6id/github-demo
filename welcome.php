<?php
            $firstname = $_REQUEST['fname'];
            $middlename = $_REQUEST['mdname'];
            $lastname = $_REQUEST['lstname'];
            $tel = $_REQUEST['tel'];
            $email = $_REQUEST['email'];
            $address = $_REQUEST['address'];
            $dob = date_create($_REQUEST['dob']);
            $currentDate = date_create(Date(! 'd-m-y'));
            $diff = date_diff($currentDate, $dob, true);
            $sog = $_REQUEST['sog'];
            $country = $_REQUEST['country'];
            $gender = $_REQUEST['gender'];
            


            echo "Thanks for registering!!! "."<br>"."<br>";
            echo "Students Data Database Storage "."<br>";
            echo "firstname is:- ".$firstname. "<br>";
            echo "middlename is:- ".$middlename. "<br>";
            echo "lastname is:- ".$lastname. "<br>";
            echo "phonenumber is:- ".$tel. "<br>";
            echo "Email Address is:- ".$email. "<br>";
            echo "State of Origin is:- ".$sog. "<br>";
            echo "Country is:- ".$country. "<br>";
            echo "Gender is:- ".$gender. "<br>";
            echo "Date of Birth is:- ".date_format($dob, 'd-m-y'). "<br>";
            echo "Age is:- ".$diff->format('%R%y');
            
    ?>

    <?php
    $file = fopen('user.txt', 'a');
    fwrite($file,$firstname);
    fclose($file);
    $file = fopen('user.txt', 'a');
    fwrite($file,$middlename);
    fclose($file);
    $file = fopen('user.txt', 'a');
    fwrite($file,$lastname);
    fclose($file);
    $file = fopen('user.txt', 'a');
    fwrite($file,$tel);
    fclose($file);
    $file = fopen('user.txt', 'a');
    fwrite($file,$address);
    fclose($file);
    $file = fopen('user.txt', 'a');
    fwrite($file,$sog);
    fclose($file);
    $file = fopen('user.txt', 'a');
    fwrite($file,$country);
    fclose($file);
    $file = fopen('user.txt', 'a');
    fwrite($file,$gender);
    fclose($file);
    ?>