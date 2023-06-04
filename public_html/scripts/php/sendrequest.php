<?php
	$text = "Макс, начинайте работу!<br>Почта заказчика: " . $_POST['umail'] . ";<br>Его имя: " . $_POST['uname'] . ";<br>С ним можно связаться через" . $_POST['reqtype'] . ";<br>Его запрос:<br> " . $_POST['ureq'] . "."; 
	$headers = "From: adminmain@premsite.ru <adminmain@premsite.ru>\r\n".
               "MIME-Version: 1.0" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n";
	$subject = "Макс, новая заявка от заказчика на сайте premsite.ru!";
	mail("maks.smagin.999@mail.ru",
		 "=?UTF-8?B?".base64_encode($subject)."?=",
		 $text,
		 $headers);
?>