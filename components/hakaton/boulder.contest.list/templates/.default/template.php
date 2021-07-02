<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * @var array $arResult
 */
?><h1>Contest list</h1>
<ul><?php
	$date = new \Bitrix\Main\Type\Date();
foreach ($arResult['ITEMS'] as $item)
{
	?><li>
		<dl>
			<dt><?=($item['NAME'] ?? 'Contest')?></dt>
			<dd><?=$item['START_DATE']?>-<?=$item['FINISH_DATE']?></dd>
		</dl>
		<?php
		if ($item['START_DATE'] <= $date && $date <= $item['FINISH_DATE'])
		{
			?><br/>
			<a href="?page=card&contest_id=<?=$item['ID']?>">Participate!</a><?php
		}
		?>
	</li><?php
}
?></ul>

<p><a href="?page=card">Go to the card</a></p>
<p><a href="?page=result">Go to results</a></p>
