<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Config;

Loc::loadMessages(__FILE__);

final class BoulderContestEditComponent extends CBitrixComponent
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
		$this->arResult['ITEM'] = [];
		$this->arResult['TRACKS'] = [];
		$this->arResult['TRACKS_NEW'] = [];
		if ($this->request->isPost() && $this->request->getPost('action') === 'save')
		{
			$this->save();
		}

		$this->includeComponentTemplate();
	}

	private function save()
	{

	}
}