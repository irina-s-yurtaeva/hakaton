<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Config;

Loc::loadMessages(__FILE__);

final class BoulderCArdComponent extends CBitrixComponent
{
	public function __construct($component = null)
	{
		parent::__construct($component);

		Main\Loader::includeModule("hakaton");
	}

	public function executeComponent()
	{
		$this->includeComponentTemplate();
	}
}