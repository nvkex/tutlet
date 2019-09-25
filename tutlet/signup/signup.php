<?php
        header ('Location:../login/login.html');
        $name = $_POST['name'];
        $bday = md5($_POST['birthday']);
        $id = $_POST['collegeid'];
        $email = md5($_POST['email']);
        $phn = md5($_POST['phone']);
        $pass = md5($_POST['pass']);
        $cpass = md5($_POST['cnf_pass']);
        $myfile = fopen("../.data" , "a");
        
        if($pass != $cpass){
            echo "<h1 align = \"center\">Error! Password Doesnt match.</h1>";
        }
        else{
            echo "<h1 align = \"center\">Registered!</h1>";
            $str = $name . "\t" . $bday . "\t" . $id . "\t" . $email . "\t " . $phn . "\t" . $pass . "\n";
        }
        fwrite($myfile, $str);
        fclose($myfile);
    ?>