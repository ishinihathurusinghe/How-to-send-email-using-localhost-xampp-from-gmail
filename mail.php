<?php

  $to ="ishinihathurusinghe@gmail.com";
  $subject= "test";
  $msg = "hello! 1st test.";
  $from = "From: ishinihathurusinghe@gmail.com";

    if(mail($to, $subject,$msg, $from)){

    echo "email sent";
  }
  else{

    echo "not sent";
  }

?>