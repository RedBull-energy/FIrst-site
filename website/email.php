<?php

$to = "bulatkhammatov@mail.ru";//Почтовый ящик на который будет отправленно сообщение
  $subject = "скучная тема";//Тема сообщения
  $message = "Message, сообщение!";//Сообщение, письмо
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";//Шапка сообщения, содержит определение типа письма, от кого, и кому отправить ответ на письмо
// Проверяем или метод запроса POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Поочередно проверяем или были переданные параметры формы, или они не пустые
  if(isset($_POST["username"])){
   //Если параметр есть, присваеваем ему переданое значение
   $name  = trim(strip_tags($_POST["username"]));
  }
  if(isset($_POST["usernumber"]))
  {
   $number  = trim(strip_tags($_POST["usernumber"]));
  }
  if (isset( $_POST["question"])) {
   $question  = trim(strip_tags($question));
  }
   // Формируем письмо
   $message  = "<html>";
    $message  .= "<body>";
    $message  .= "Телефон: ".$number;
    $message  .= "<br />";
    $message  .= "Имя: ".$name;
    $message  .= "<br />";
    $message  .= "Вопрос: ".$question;
    $message  .= "</body>";
   $message  .= "</html>";
   // Окончание формирования тела письма
   // Посылаем письмо
   mail ($to, $subject, $message, $headers);
}
else
{
 exit;
} 
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Пример простой формы обратной связи" />
<title>Форма связи</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>

</head>
<body>
    
<div class="main-content">
<form class="obratnuj-zvonok" autocomplete="off" action='email.php' method='post'>
	<div class="form-zvonok"> 
		<div>
			<label>Имя <span>*</span></label>
			<input type='text' name='username' required></div>
		<div>
			<label>Номер телефона (с кодом) <span>*</span></label>
			<input type='text' name='usernumber' required></div>
		<div>
			<label>Сообщение</label>
			<input type='text' name='question'>
		</div>
		<a href="email.php"><input class="bot-send-mail" type='submit' value='Послать заявку'></a>
	</div>
    
</form>
</div>
</body>
</html>