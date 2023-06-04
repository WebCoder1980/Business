<!doctype html>
<html>
<head>
<?php ini_set('display_errors', 1); ?>
<?php chdir($_SERVER['DOCUMENT_ROOT']); chdir('..'); include (getcwd() . '/main.php');?>
<script language='javascript' type='text/javascript' src='<?php autov("/scripts/jquery.min.js"); ?>'></script>
<script language='javascript' type='text/javascript' src='<?php autov("/scripts/main.js"); ?>'></script>
	<script language='javascript' type='text/javascript' src='<?php autov("/scripts/view_services.js"); ?>'></script>
<link href="<?php autov("/scripts/jQueryFormStyler/jquery.formstyler.css"); ?>" rel="stylesheet">
<link href="<?php autov("/scripts/jQueryFormStyler/jquery.formstyler.theme.css"); ?>" rel="stylesheet">
<script src="<?php autov("/scripts/jQueryFormStyler/jquery.formstyler.min.js"); ?>"></script>
<script src="/scripts/parallax_1.5.0/parallax.js"></script>
<script src="/scripts/jquery_ui.min.js"></script>	
<link rel='stylesheet' href='<?php autov("/styles/main.css"); ?>'>
<meta charset="utf-8">
<title>Заказать сайт под ключ</title>
</head>

<body>
	<div id="menu">
		<div id="logo"></div><a class="item">Почему Мы?</a><a class="item">Цены и услуги</a>
	</div>
	<div id="review"><div id="parallax" data-parallax="scroll" data-image-src="/images/programming.jpg">
		<div class="title">Разработка сайта под ключ.</div>	
		<div class="title">Быстро. Качественно. Недорого.</div>	
	</div></div>
	<div id="info">
		<div class="titlebig">Наши приимущества:</div>
		<div id="advantage">
			<div class="item"><div class="number">1.</div><div class="text">Наш опыт работы - больше 6 лет на рынке.</div></div>
			<div class="item"><div class="number">2.</div><div class="text">У нас толковые и отвественные специалисты, гарантируют отличные результаты.</div></div>
			<div class="item"><div class="number">3.</div><div class="text">Мы сами против мошенничества - поэтому продоставляем каждому человеку возможность избежать этого - с оплатой частями.</div></div>
			<div class="item"><div class="number">4.</div><div class="text">Много времени уделяется желаниям заказчика.</div></div>
			<div class="item"><div class="number">5.</div><div class="text">Мы оплатим домен на год, хостинг на некоторое время, и если потребуется, может поставить рекламу, для заработка или распостранения Вашего сайта.</div></div>
			<div class="item"><div class="number">6.</div><div class="text">Мы владеем всеми мощными технологиями, без которых невозможно получить отличный результат - HTML, CSS, Sass, JS, jQuery, jQueryForms, PHP, MySQL, Nginx на Debian OC, защитой от DDos атак и брутфорса.</div></div>
			<div class="item"><div class="number">7.</div><div class="text">Мы даём гарантию роботоспособности Вашего сайта - за пол года если будут какие либо неполадки, то мы поправим абсолютно <u>бесплатно!</u></div></div>
			<div class="item"><div class="number">8.</div><div class="text">После полного выполнения заказа, мы можете заказать добавление дополнительных функций (за дополнительную плату).</div></div>
			<div class="item"><div class="number">9.</div><div class="text">На последок очень важный момент - мы делает сайт и его дизайн с нуля, что бы приоритет в поисковиках бы выше. Нам не всё ровно на это!</div></div>
		</div>
			<div id="services">
				<div id="viewport">
					<div class="item">
						<div class="titlemedium">Сайт - визитка</div>
						<img src="<?php autov('/images/personaly_page.png');?>">
						<div class="text">Отличный вариант для тех, у кого бюджета немного, но хочет получить качественный и быстрый результат!</div>
						<div class="time">4 дня.</div>
						<div class="price">9 999 рублей!</div>
						<input class="buy" type="button" value="Заказать">
					</div>
					<div class="item">
						<div class="titlemedium">Интернет - магазин</div>
						<img src="<?php autov('/images/site_business.png'); ?>">
						<div class="text">У Вас свой бизнес или Вы хотите начать продавать? Сайт очень поможет с этим!</div>
						<div class="time">7 дней.</div>
						<div class="price">19 999 рублей!</div>
						<input class="buy" type="button" value="Заказать">
					</div>
					<div class="item">
						<div class="titlemedium">Подробный сайт компании</div>
						<img src="<?php autov('/images/office.png'); ?>">
						<div class="text">Многостраничный сайт, на котором подробно описана Ваша фирма, включая информацию о: услугах, истории развития, предложений, новостей и вакансий.</div>
						<div class="time">7 дней.</div>
						<div class="price">18 999 рублей!</div>
						<input class="buy" type="button" value="Заказать">
					</div>
					<div class="item">
						<div class="titlemedium">Блог</div>
						<img src="<?php autov('/images/blog.png'); ?>">
						<div class="text">Сайт на котором регулярно выкладываются новости и записи, посвещённые Вашей тематике под ключ. Возможно подключение рекламы для заработка.</div>
						<div class="time">4 дня.</div>
						<div class="price">18 999 рублей!</div>
						<input class="buy" type="button" value="Заказать">
					</div>
					<div class="item">
						<div class="titlemedium">Индивидуальный заказ</div>
						<img src="<?php autov('/images/handshake.png'); ?>">
						<div class="text">В списке не оказалось нужного варианта? Напишите нам и мы выполним индивидуальный запрос под Ваши нужны!</div>
						<input class="buy" type="button" value="Написать заявку">
					</div>
					<input class="arrow-right" type="button">
					<input class="arrow-left" type="button">
				</div>
				<div id="switch"></div>
		</div>
		<div id="included">
			<div class="titlebig">Включено:</div>
			<div class="item">Полностью готовое решение</div>
			<div class="item">Адрес сайта, домен можете выбрать Вы</div>
			<div class="item">Хостинг на 3 месяца и домен на год уже оплачен</div>
			<div class="item">Бесплатная техподдержка в течение 6 месяцев</div>
			<script>
				$(document).ready(function() {
					$("#included .item").prepend("<img src='<?php autov('/images/check_mark.png');?>'>");
					$("#info").css("background-image", "url('<?php autov("/images/bg1.png"); ?>')");
				});
			</script>
		</div>
	</div>
	<div id="buy" data-parallax="scroll" data-bleed="100" data-image-src='/images/bg2.jpg'>
			<div class="titlebig">Оставить заявку? Или остались вопросы? Как Вам удобнее?</div>
			<div id="selectcont">
				<input type="radio" class="rb" name="checkedcont">
				<input type="radio" class="rb" name="checkedcont">
				<input type="radio" class="rb" name="checkedcont">
				<input type="radio" class="rb" name="checkedcont">
			</div>
			<div id="username"><div>Как к Вам обращаться?</div><input type="text" class="text"></div>
			<div class="contact"><div class="text">Email:</div><input type="text"></div>
			<div id="task"><div>Описание задачи:</div><textarea class="text" rows="7"></textarea></div>
			<input class="send" type="button" value="Отправить заявку" name="button">
			<a id="#error"></a>
			<div id="status"></div>
	</div>
</body>
</html>