<?php

if (!empty($_POST["name"]) AND !empty($_POST["email"])AND !empty($_POST["tel"]) AND !empty($_POST["message"])) 
{
    $headers = "Reply-To: murimolda@gmail.com" .
                "X-Mailer: PHP/" . phpversion();
         
    $theme = "Сообщение с сайта Fondesign";             
             
	$letter = "Сообщение с сайта Fondesign: \n";
	$letter .= "Имя отправителя: ".$_POST["name"]."\n";
	$letter .= "Электронный адрес отправителя: ".$_POST["email"]."\n";
	$letter .= "Телефон отправителя: ".$_POST["tel"]."\n";
	$letter .= "Текст сообщения: ".$_POST["message"]."\n";
    
    if (mail("murimolda@gmail.com", $theme, $letter, $headers)){
      echo "<script>alert('Сообщение отправлено! Мы свяжемся с вами в ближайщее время.');</script>";
      echo("<script>location.href='index/index_contacts.html'</script>");
    } else {
        echo "<script>alert('Сообщение не отправлено. Возможно, проблемы с сервером. Попробуйте, пожалуйста, через несколько минут.');</script>";
        echo("<script>location.href='index/index_contacts.html'</script>");    }  
              
} else {
  header("Location: index/index_contacts.html");
};


 
?>

