<?php

if (!empty($_POST)) {

	$message = "Вам пришло новое сообщение с сайта от пользователя: " . $_POST["name"] . "\n" . "Email отправителя: " . $_POST["email"] . "\n" . "Текст сообщения: " . $_POST["message"];  


	$from = "Email отправителя: info@yanpustynnyy.ru";
	$sendMail = mail("necrosith@yqandex.ru", "Сообщение с сайта", $message, $from);

	if ($sendMail) {
		echo "Сообщение успешно отправлено!";
	}
	else {
		echo "Что то пошло не так :(";
	}

}

?>

<link rel="stylesheet" href="main.css">
<form class="form" action="index.php" method="post">

	<input type="text" name="name" placeholder="Введите ваше имя"><br>
	<input type="text" name="email" placeholder="Введите вашу почту"><br>
	<textarea name="message" placeholder="Введите сообщение" id="" cols="30" rows="10"></textarea><br>
	<input type="submit" value="Отправить сообщение!">

</form>