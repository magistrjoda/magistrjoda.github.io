<?php
$text = "Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые разновидности червяков и мошек и чувствую близость всемогущего, создавшего нас по своему подобию, веяние вселюбящего, судившего нам парить в вечном блаженстве, когда взор мой туманится и все вокруг меня и небо надо мной запечатлены в моей душе, точно образ возлюбленной, - тогда, дорогой друг, меня часто томит мысль: Ах! Как бы выразить, как бы вдохнуть в рисунок то, что так полно, так трепетно живет во мне, запечатлеть отражение моей души, как душа моя - отражение предвечного бога! Друг";
$theme = "Страдания юного Вертера";
$to = "andrey.rusin2016@yandex.ru";
$subject = "Оформление письма";
$message = "<meta charset='utf-8'>
<div style='width: 100%; height: 150px; position: absolute; display: block; background: #F0FFFF;'></div>
<div style='width: 600px; height: auto; position: absolute; display: block; left: 50%; margin-left: -300px;'>
<div style='width: 100%; height: 150px; position: absolute; display: block; background: #F0FFFF;'>
<img src='logo.gif' style='width: 280px; height: 100%; display: block; position: absolute;'>
<h4 style='display: block; position: absolute; top: 50%; margin-top: -10px; left: 300px;'>$theme</h4>
</div>
<div style=' width: 100%; min-height: 400px; height: auto; margin-top: 150px;'>
 $text

 С уважением,<br>
 Ольга Русина<br>

</div>
<div style='width: 100%; height: 100px; position: absolute; display: block; background: #DCDCDC; font-size: 20px;'>
	<a href='http://aquatrade.store/' style='position: absolute; top: 50%; margin-top: -10px; margin-left: 70px; text-decoration: none; color: black'>Сайт</a>
	<a href='http://aquatrade.store/contacts.html' style='position: absolute; top: 50%; margin-top: -10px; margin-left: 270px; text-decoration: none; color: black'>Контакты</a>
	<a href='http://aquatrade.store/aboutus.html' style='position: absolute; top: 50%; margin-top: -10px; margin-left: 470px; text-decoration: none; color: black'>О нас</a><br>

</div>
</div>";

mail($to, $subject, $message);

echo "$theme";

?>
