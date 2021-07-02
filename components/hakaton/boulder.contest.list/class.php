<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main;
use Bitrix\Hakaton\Boulder;
use Bitrix\Main\Config;

Loc::loadMessages(__FILE__);

final class BoulderContestListComponent extends CBitrixComponent
{
	public function __construct($component = null)
	{
		parent::__construct($component);

		Main\Loader::includeModule("hakaton");
	}

	public function executeComponent()
	{
		global $APPLICATION;
		$APPLICATION->SetTitle('Contests');
		$date = new Main\Type\Date();
		$date->add('1D');
		$this->arResult['ITEMS'] = Boulder\ContestTable::getList([
			'select' => ['*'],
			'filter' => ['ACTIVE' => 'Y', '>=START_DATE' => $date],
			'order' => ['START_DATE' => 'DESC'],
			'limit'  => 100
		])->fetchAll();

		$this->includeComponentTemplate();
	}
}