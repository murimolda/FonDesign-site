<?php

if (!empty($_POST["name_en"]) AND !empty($_POST["email_en"])AND !empty($_POST["tel_en"]) AND !empty($_POST["message_en"])) 
{
    $headers = "Reply-To: murimolda@gmail.com" .
                "X-Mailer: PHP/" . phpversion();
         
    $theme = "Сообщение с сайта Fondesign(английская версия)";             
             
	$letter = "Сообщение с сайта Fondesign(английская версия): \n";
	$letter .= "Имя отправителя: ".$_POST["name_en"]."\n";
	$letter .= "Электронный адрес отправителя: ".$_POST["email_en"]."\n";
	$letter .= "Телефон отправителя: ".$_POST["tel_en"]."\n";
	$letter .= "Текст сообщения: ".$_POST["message_en"]."\n";
    
    if (mail("murimolda@gmail.com", $theme, $letter, $headers)){
      echo "<script>alert('Message sent! We will contact you shortly.');</script>";
      echo("<script>location.href='index_english/index_contacts_english.html'</script>");

    } else {
        echo "<script>alert('Message not sent. Perhaps a problem with the server. Please try in a few minutes.');</script>";
      echo("<script>location.href='index_english/index_contacts_english.html'</script>");
    }
} else {
  header("Location: index_english/index_contacts_english.html");
};              
 
?>