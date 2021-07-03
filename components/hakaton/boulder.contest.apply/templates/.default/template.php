<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<!doctype html>
<html lang=ru>
<head>
<!--	<meta charset="UTF-8">-->
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Apply</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=$templateFolder?>/style.css">
</head>
<body>

<main>
	<form method="post" action="<?=POST_FORM_ACTION_URI?>">
	<?=bitrix_sessid_post()?>

	<input type="hidden" name="ID" value="<?=htmlspecialcharsbx($item['ID'])?>">

		<h1 class="title">Войти в соревнование</h1>


	<h3 class="subtitle">Фамилия, имя</h3>
	<div><input type="text" name="name" value="<?=htmlspecialcharsbx($item['DATE'])?>"></div>

	<h3 class="subtitle">Возраст</h3>
	<div><input type="text" name="age" value="<?=htmlspecialcharsbx($item['DATE'])?>"></div>

	<h3 class="subtitle">Пол</h3>
		<select class="select-css">
			<option disabled>Выберите пол</option>
			<option value="female">Женский</option>
			<option value="male">Мужской</option>
		</select>


		<p><input class="btn btn-save" type="submit" name="" value="Войти" /></p>
	</form>

</main>
</body>
</html>
