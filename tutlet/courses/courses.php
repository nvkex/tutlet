<?php
        header ('Location:../home/home.html');
        $SESSION = fopen("../.session" , "r");
        $ACTIVE_USER = fread($SESSION, filesize("../.session")) . "\n";
        
        if(!empty($_POST['course'])){
            foreach($_POST['course'] as $course){
                $course = $course . ".course";
                $COURSE_FILE = fopen($course,"a");
                fwrite($COURSE_FILE, $ACTIVE_USER);
            }
        }

?> 
