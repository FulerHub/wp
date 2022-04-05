<?php

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

$sitename = "Integral MGN";

$name = clean($_POST["name"]);
$phone = clean($_POST["phone"]);
$email = clean($_POST["mail"]);

$pagetitle = "Новая заявка с \"$sitename\"";

$message = "<b>Контакты</b><br>Имя: $name <br>Телефон: $phone<br>Email: $email<br><br><b>Информация</b>";

$category = clean($_POST["category"]);
$i =1;
$message .= "<br><br>Категория продукции: $category";

while ($i > 0){
	if($_POST["name_option_".$i]){
		$message .= '<br>'.$_POST["name_option_".$i].': '.$_POST["option_".$i];

	}
	else{
		$i=0;
		break;
	}
	$i++;
}


require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail->setFrom('from@example.com', 'No name');
$mail->addAddress('riverfuler@gmail.com', 'No name');


$mail->Subject = $pagetitle;

$mail->msgHTML($message);

if (!$mail->send())
{
    $msg .= "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    $msg .= "Message sent!";
}

$host  = $_SERVER['HTTP_HOST'];

header("Location: ../../../thank");

?>

