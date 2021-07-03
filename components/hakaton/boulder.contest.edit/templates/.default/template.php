<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var array $arResult
 */
$item = $arResult['ITEM'];
?>

<!doctype html>
<html lang="ru">
<head>
<!--	<meta charset="UTF-8">-->
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Create or edit contest</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=$templateFolder?>/style.css">
</head>
<body>
<main>

<h1 class="title">Новое соревнование</h1>
<form method="post" action="<?=POST_FORM_ACTION_URI?>">
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="ID" value="<?=htmlspecialcharsbx($item['ID'])?>">
	<h2><input type="text" name="NAME" value="<?=htmlspecialcharsbx($item['NAME'])?>" placeholder="New contest"></h2>
	<h3 class="subtitle">Дата соревнования</h3>
	<div><input type="date" name="DATE" value="<?=htmlspecialcharsbx($item['DATE'])?>"></div>
	<h3 class="subtitle">Время сета</h3>
	<div class="flex block-time">
		<input type="time" name="START" value="<?=htmlspecialcharsbx($item['START'])?>"> —
		<input type="time" name="FINISH" value="<?=htmlspecialcharsbx($item['FINISH'])?>">
	</div>

	<h3  class="subtitle">Список трасс</h3>
	<ul class="lists-track">
		<?php
		foreach ($arResult['TRACKS'] as $track)
		{
			?>
			<li>
				<span>3</span><input type="text" name="TRACK[<?=$track['ID']?>]" value="<?=htmlspecialcharsbx($track['NAME'])?>">
			</li>
			<?php
		}
		foreach ($arResult['TRACKS_NEW'] as $track)
		{
			?>
			<li>
				<span>2</span><input type="text" name="TRACK_NEW[]" value="<?=htmlspecialcharsbx($track['NAME'])?>">
			</li>
			<?php
		}
		?>
		<li>
			<span>1</span><input type="text" name="TRACK_NEW[]" value="" placeholder="">
		</li>
	</ul>

<!--	<p><input class="btn btn-add" type="button" name="" value="ADD" /></p>-->
	<div class="attempt"><span>+ добавить еще</span></div>

	<p><input class="btn btn-save" type="submit" name="" value="Создать" /></p>
</form>
</main>
</body>
</html>

