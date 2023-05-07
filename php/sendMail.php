<?php 
    /* user data */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mess =$_POST['mess'];


    /* sending */ 
    /* TWOJ EMAIL */
    $to = 'kontakt.fabadbeton@gmail.com';
    $subject = 'Wiadomość';
    $headers = "From: ".$name." <".$email."> \r\n";
    $message = "
        \nEmail: " . $email .
        "\nImie i nazwisko: " . $name .
        "\n\n\nWiadomość: \n" . $mess
        
    ;
    $send_email = mail($to,$subject,$message,$headers);

    echo ($send_email) ? 'success' : 'error';
    echo $orders;
?>
