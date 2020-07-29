<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>  <?php

      ini_set("SMTP","localhost");
   ini_set("smtp_port","25");
   ini_set("sendmail_from","yasirshaikhkhan4633@gmail.com");
   ini_set("sendmail_path", "C:\wamp64\bin\sendmail.exe -t");

      $emailfrom = $_POST["Email"];
      $subject1 = $_POST["Message"];
      $name = $_POST["Name"];
      $no = $_POST["number"];


      
    
         $to = "yasirshaikhkhan4633@gmail.com";
         $subject = "enquiry of LED's";
         
         $message = $subject;
         $message .= "Customer Details:|| Name is :".$name."|| Message is: ".$subject1."|| Mobile-Number is :".$no;
         
         $header = "From: $emailfrom";

         
        
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            header("location:companytemp.php");

         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>