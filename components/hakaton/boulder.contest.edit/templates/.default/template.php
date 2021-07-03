<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var array $arResult
 * @var \CMain $APPLICATION
 */
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main;

$item = $arResult['ITEM'];
if (empty($item))
{
	$item['START_DATE'] = new Main\Type\DateTime();
	$item['FINISH_DATE'] = new Main\Type\DateTime();
	$item['FINISH_DATE']->add('2hour');
}
$start = new Main\Type\Date($item['START_DATE']);
$startSet = $item['START_DATE']->format('H:i');
$finishSet = $item['FINISH_DATE']->format('H:i');
?>
<!DOCTYPE html>
<html <?if (LANGUAGE_ID == "tr"):?>lang="<?=LANGUAGE_ID?>"<?endif?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?
	$APPLICATION->ShowHead(false);
	?>
	<title><?=$APPLICATION->ShowTitle()?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=$templateFolder?>/style.css">
</head>
<body>
<main>
<h1 class="title"><?=Loc::getMessage('BCE_PLACEHOLDER')?></h1>
<form method="post" action="<?=POST_FORM_ACTION_URI?>">
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="ID" value="<?=htmlspecialcharsbx($item['ID'])?>">
	<h2><input type="text" name="NAME" value="<?=htmlspecialcharsbx($item['TITLE'])?>" placeholder="<?=Loc::getMessage('BCE_PLACEHOLDER')?>"></h2>
	<h3 class="subtitle"><?=Loc::getMessage('BCE_DATE')?></h3>
	<div><input type="date" name="DATE" value="<?=$start->format('Y-m-d')?>"></div>
	<h3 class="subtitle"><?=Loc::getMessage('BCE_TIME')?></h3>
	<div class="flex block-time">
		<input type="time" name="START" value="<?=$startSet?>"> —
		<input type="time" name="FINISH" value="<?=$finishSet?>">
	</div>
	<h3  class="subtitle">Tracks</h3>
	<ul class="lists-track">
		<?php
		$i = 1;
		foreach ($arResult['TRACKS'] as $track)
		{
			?>
			<li>
				<span><?=($i++)?></span><input type="text" name="TRACK[<?=$track['ID']?>]" value="<?=htmlspecialcharsbx($track['TITLE'])?>">
			</li>
			<?php
		}

		?>
		<li>
			<span><?=($i++)?></span><input type="text" name="TRACK_NEW[]" value="" placeholder="">
		</li>
	</ul>
	<div class="attempt"><span>+ add track</span></div>
	<p><input class="btn btn-save" type="submit" name="save" value="Save" /></p>
</form>
</main>
</body>
</html>

