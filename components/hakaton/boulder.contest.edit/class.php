<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Config;
use Bitrix\Hakaton;

Loc::loadMessages(__FILE__);

final class BoulderContestEditComponent extends CBitrixComponent
{
	private $itemId;
	private $errorCollection;

	public function __construct($component = null)
	{
		parent::__construct($component);
		$this->errorCollection = new Main\ErrorCollection();
	}
	public function onPrepareComponentParams($arParams)
	{
		if (!Main\Loader::includeModule("hakaton"))
		{
			$this->errorCollection->setError(new Main\Error('Module is not installed'));
		}
		else
		{
			$this->itemId = (int)$arParams['ID'];
		}
		return $arParams;
	}

	public function executeComponent()
	{
		global $APPLICATION;
		$APPLICATION->SetTitle(Loc::getMessage('BCE_CONTEST'));

		if ($this->errorCollection->isEmpty())
		{
			$this->arResult['ITEM'] = $this->getItem();
			$this->arResult['TRACKS'] = $this->getTracks();
			$this->arResult['TRACKS_NEW'] = [];
			if ($this->request->isPost() &&
				$this->request->getPost('action') === 'save')
			{
				if (!check_bitrix_sessid())
				{

				}
				$this->save();
			}
			$this->includeComponentTemplate();
		}
	}

	private function getItem()
	{
		if ($this->itemId > 0)
		{
			return Bitrix\Hakaton\Boulder\ContestTable::getById($this->itemId);
		}
		return [];
	}

	private function getTracks()
	{
		if ($this->itemId > 0)
		{
			return Bitrix\Hakaton\Boulder\ContestTable::getList([
				'select' => ['*'],
				'filter' => ['CONTEST' => $this->itemId],
				'order' => ['NUMBER' => 'ASC', 'ID' => 'ASC']
			]);
		}
		return [];
	}

	private function save()
	{

	}
}