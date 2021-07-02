<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Config;

Loc::loadMessages(__FILE__);

final class BoulderComponent extends CBitrixComponent
{
	public function __construct($component = null)
	{
		parent::__construct($component);

		Main\Loader::includeModule("hakaton");
	}

	public function executeComponent()
	{
		$page = $this->request->get('page');

		if (!$page)
		{
			$page = 'index';
		}
		global $APPLICATION;
		$APPLICATION->RestartBuffer();
		$this->includeComponentTemplate($page);
		CMain::FinalActions();
	}
}