<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var array $arResult
 */
$item = $arResult['ITEM'];
?><h1>Create or edit contest</h1>
<form method="post" action="<?=POST_FORM_ACTION_URI?>">
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="ID" value="<?=htmlspecialcharsbx($item['ID'])?>">
	<h2><input type="text" name="NAME" value="<?=htmlspecialcharsbx($item['NAME'])?>" placeholder="New contest"></h2>
	<h3>Date</h3>
	<div><input type="date" name="DATE" value="<?=htmlspecialcharsbx($item['DATE'])?>"></div>
	<h3>Time</h3>
	<div>
		<input type="time" name="START" value="<?=htmlspecialcharsbx($item['START'])?>"> -
		<input type="time" name="FINISH" value="<?=htmlspecialcharsbx($item['FINISH'])?>">
	</div>
	<h3>Tracks</h3>
	<ol>
	<?php
	foreach ($arResult['TRACKS'] as $track)
	{
		?>
			<li>
				<input type="text" name="TRACK[<?=$track['ID']?>]" value="<?=htmlspecialcharsbx($track['NAME'])?>">
			</li>
		<?php
	}
	foreach ($arResult['TRACKS_NEW'] as $track)
	{
		?>
		<li>
			<input type="text" name="TRACK_NEW[]" value="<?=htmlspecialcharsbx($track['NAME'])?>">
		</li>
		<?php
	}
	?>
		<li>
			<input type="text" name="TRACK_NEW[]" value="" placeholder="">
		</li>
	</ol>

	<p><input type="button" name="" value="ADD" /></p>

	<p><input type="submit" name="" value="SAVE" /></p>
</form>