<?php

if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/ 
{
    $headers = "Reply-To: murimolda@gmail.com" .
                "X-Mailer: PHP/" . phpversion();
         
    $theme = "Сообщение с сайта Fondesign(EN)";
    $checkbox = $_POST["checkbox"];
    if(empty($checkbox)) 
	  {
	    $checkboxArrey = "Услуги не выбраны";
	  } 
	  else
	  {
	    $N = count($checkbox);
	    for($i=0; $i < $N; $i++)
	    {
	      $checkboxArrey = ($aDoor[$i] . " ");
	    }
	  }             
             
	$letter = "Сообщение с сайта Fondesign: \n";
	$letter .= "Тип объекта: ".$_POST["object-tipe"]."\n";
	$letter .= "Общая площадь: ".$_POST["object-square"]."\n";
	$letter .= "Местоположение: ".$_POST["object-location"]."\n";
	$letter .= "Имя отправителя: ".$_POST["name"]."\n";
	$letter .= "Телефон отправителя: ".$_POST["tel"]."\n";
	$letter .= "Выбраны услуги: ".$checkboxArrey."\n";
    
    if (mail("murimolda@gmail.com", $theme, $letter, $headers)){
      	echo "<script>alert('Message sent! We will contact you shortly.');</script>";
      	echo("<script>location.href='index_english/index_application_form_english.html'</script>");


    } else {
      	echo "<script>alert('Message not sent. Perhaps a problem with the server. Please try in a few minutes.');</script>";
		echo("<script>location.href='index_english/index_application_form_english.html'</script>");
    	}  
              
} else {
		header("Location: index_english/index_application_form_english.html");
}  
;




 ?>