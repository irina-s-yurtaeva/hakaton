<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var array $arResult
 */
?>

<!doctype html>
<html lang="ru">
<head>
<!--	<meta charset="UTF-8">-->
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Список соревнований</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=$templateFolder?>/style.css">
</head>
<body>
<main>

	<h1 class="title">Contest list</h1>

	<div class="table">
		<dib class="table-row table-row-block">
			<div class="name table-cell">Янтарные вершины</div>
			<div class="flex table-cell date">
				02.08.2021
			</div>
			<div class="flex table-cell time">
				<div class="start">02.06.2021</div>
				<div class="end">04.06.2021</div>
			</div>
			<div class=" table-cell opportunities">
				<a href="#" class="btn btn-save btn-submit-application">Подать заявку</a>
			</div>
		</dib>

		<dib class="table-row table-row-block">
			<div class="name table-cell">Текущее  соревнование</div>
			<div class="flex table-cell date">
				03.06.2021
			</div>
			<div class="flex table-cell time">
				<div class="start">08:00</div>
				<div class="end">20:00</div>
			</div>
			<div class=" table-cell opportunities">
				<a href="#" class="btn btn-save btn-take-part">Принять участие</a>
			</div>
		</dib>

		<dib class="table-row table-row-block">
			<div class="name table-cell">Янтарные горы</div>
			<div class="flex table-cell date">
				03.02.2021
			</div>
			<div class="flex table-cell time">
				<div class="start">08:00</div>
				<div class="end">20:00</div>
			</div>
			<div class=" table-cell opportunities">
				<a href="#" class="btn btn-results">Посмотреть результаты</a>
			</div>
		</dib>

	</div>




<!--	<p><a href="?page=apply">Apply!</a></p>-->
<!--	<p><a href="?page=card">Go to the card</a></p>-->
<!--	<p><a href="?page=result">Go to results</a></p>-->
</main>

</body>
</html>





