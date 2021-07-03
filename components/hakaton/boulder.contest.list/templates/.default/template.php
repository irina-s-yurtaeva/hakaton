<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var array $arResult
 * @var CMain $APPLICATION
 */
?>

<!doctype html>
<html lang="ru">
<head>
<!--	<meta charset="UTF-8">-->
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$APPLICATION->GetTitle()?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=$templateFolder?>/style.css">
</head>
<body>
<main>

	<h1 class="title">Contest list</h1>

	<div class="table">
		<div class="table-row table-row-block">
			<span class="delete"></span>
			<div class="name table-cell">Future contest</div>
			<div class="flex table-cell date">
				02.08.2021
			</div>
			<div class="flex table-cell time">
				<div class="start">10:00</div>
				<div class="end">20:30</div>
			</div>
			<div class=" table-cell opportunities">
				<a href="#" class="btn btn-save btn-submit-application">Подать заявку</a>
			</div>
		</div>
		<div class="table-row table-row-block">
			<span class="delete"></span>
			<div class="name table-cell">Active contest which happens right now. You can participate.</div>
			<div class="flex table-cell date">
				03.06.2021
			</div>
			<div class="flex table-cell time">
				<div class="start">08:00</div>
				<div class="end">20:00</div>
			</div>
			<div class=" table-cell opportunities">
				<a href="?page=appy" class="btn btn-save btn-take-part">Apply</a>
			</div>
		</div>

		<div class="table-row table-row-block">
			<span class="delete"></span>
			<div class="name table-cell">Active contest which happens right now. You can not participate.</div>
			<div class="flex table-cell date">
				03.06.2021
			</div>
			<div class="flex table-cell time">
				<div class="start">08:00</div>
				<div class="end">20:00</div>
			</div>
			<div class=" table-cell opportunities">
				<a href="?page=appy" class="btn btn-save btn-take-part">Apply</a>
			</div>
		</div>

		<div class="table-row table-row-block">
			<span class="delete"></span>
			<div class="name table-cell">Past contest</div>
			<div class="flex table-cell date">
				03.02.2021
			</div>
			<div class="flex table-cell time">
				<div class="start">08:00</div>
				<div class="end">20:00</div>
			</div>
			<div class=" table-cell opportunities">
				<a href="?page=result" class="btn btn-results">View results</a>
			</div>
		</div>
	</div>
</main>
</body>
</html>





