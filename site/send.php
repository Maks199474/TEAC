<?php

    $name = $_POST['name'];
    $email = $_POST['email'];

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);

    $name = urldecode($name);
    $email = urldecode($email);

    $name = trim($name);
    $email = trim($email);

    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name no-reply@mydomain.ru' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    if (mail("maksimbel2006@mail.ru",
             "Новое письмо от сайта",
             "Имя: ".$name."\n".
             "Email: ".$email."\n".
             "From: no-reply@mydomain.ru \r\n", $headers)
    
    ) {
        echo ('Письмо успешно отправлено!');
    }
    
    else {
        echo ('Есть ошибки! Проверьте данные...');
    }

?>