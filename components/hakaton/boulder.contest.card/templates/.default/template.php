<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<!doctype html>
<html lang="ru">
<head>
<!--	<meta charset="UTF-8">-->
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Боулдеринг</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=$templateFolder?>/style.css">
</head>
<!--<body class="girls ">-->
<body class="boys ">
<main class="competitions">
	<h1 class="title">Соревнования <span>03.09.2021</span></h1>

	<div class="select-block">
		<div class="subtitle">Трасса</div>

		<select class="select-css">
			<option disabled>Выберите трассу</option>
			<option value="Трасса #1">Трасса #1 - крассная</option>
			<option value="Трасса #2">Трасса #2 - зеленая</option>
			<option value="Трасса #3">Трасса #3 - розовая</option>
		</select>

	</div>

	<div class="slider-block">
		<div class="subtitle">Попытка <span>3</span></div>

		<div class="slick">
			<div>
				<div class="my-slick-item">
					<form class="block-radio">
						<label><input name="popytka" type="radio" value="popytka"> <span>Попытка</span></label>
						<label><input name="popytka" type="radio" value="zone"> <span>Zone</span></label>
						<label><input name="popytka" type="radio" value="top" checked> <span>Top</span></label>
					</form>
				</div>
			</div>
			<div>
				<div class="my-slick-item">
					<form class="block-radio">
						<label><input name="popytka" type="radio" value="popytka"> <span>Попытка</span></label>
						<label><input name="popytka" type="radio" value="zone"> <span>Zone</span></label>
						<label><input name="popytka" type="radio" value="top" checked> <span>Top</span></label>
					</form>
				</div>
			</div>
			<div>
				<div class="my-slick-item">
					<form class="block-radio">
						<label><input name="popytka" type="radio" value="popytka"> <span>Попытка</span></label>
						<label><input name="popytka" type="radio" value="zone"> <span>Zone</span></label>
						<label><input name="popytka" type="radio" value="top" checked> <span>Top</span></label>
					</form>
				</div>
			</div>
			<div>
				<div class="my-slick-item">
					<form class="block-radio">
						<label><input name="popytka" type="radio" value="popytka"> <span>Попытка</span></label>
						<label><input name="popytka" type="radio" value="zone"> <span>Zone</span></label>
						<label><input name="popytka" type="radio" value="top" checked> <span>Top</span></label>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="attempt"><span>+ еще попытка</span></div>



</main>

<!--блок когда соревнования окончены-->


<!--<main class="competitions-end">-->
<!--	<div class="competitions-end--container">-->
<!--		<h1 class="title">Соревнования <span>03.09.2021</span></h1>-->
<!---->
<!--		<p><input class="btn btn-save" type="submit" name="" value="Результаты" /></p>-->
<!--	</div>-->
<!--</main>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="<?=$templateFolder?>/script.js"></script>

</body>
</html>

