<?php

  $COURSE = $_POST['course'];
  $COURSE = "../courses/" . $COURSE . ".course";
  $C_FILE = fopen($COURSE, "r");
  $str = fread($C_FILE, filesize($COURSE));
  echo "<body style = \"margin-left: 600px; margin-right: 600px;\"bgcolor = \"#9999ff\"> <h2 style = \"margin-top: 200px; font-family: Arial; letter-spacing : 10px;\"align = \"center\" >" . $str . "</h2></body>";
?>