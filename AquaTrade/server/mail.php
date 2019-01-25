<?php
 if ($_POST['keyMail'] != "VXGEWvgefuj2wk") {
 	echo "<meta http-equiv='refresh' content='0;URL=http://aquatrade.store'>";
 	exit();
 }
 if ($_POST['ObSvSubmit']) {
 $to = "info@aquatrade.store";
 $subject = "Форма обратной связи";
 $message = "
  От: $_POST[mail] <br>
  Имя: $_POST[name] <br>
  Сообщение:<br> $_POST[text]";

 @mail($to, $subject, $message);

 echo "<p style='text-align: center; font-family: arial; margin-top: 200px; font-size: 20px;'>Ваше сообщение отправлено! Спасибо!<br><a href='http://aquatrade.store'>Вернуться на главную</a></p>";

}
?>
