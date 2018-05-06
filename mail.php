<?php
    $to = 'londly@mail.ru';
    $firstname = $_POST["fname"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$laststname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Email: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo '<html>
    <head>
        <title>Message Sent</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="padd_top_200"></div>
        <center><h1 style="font-size: 40px;color: white;">The message has been sent.</h1><br/><button style="font-size: 40px;color: white;" class="contact_btn mt-3"><a style="text-decoration:none;" href="/"> GO TO MAIN PAGE</a></button></center></body>
</html>';
    }else{
        echo '<html>
    <head>
        <title>Failed</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="padd_top_200"></div>
        <center><h1 style="font-size: 40px;color: white;">Failedt.</h1><br/><button style="font-size: 40px;color: white;" class="contact_btn mt-3"><a style="text-decoration:none;"  href="/"> GO TO MAIN PAGE</a></button></center></body>
</html>';
    }

?>