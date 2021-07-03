<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Config;
use Bitrix\Hakaton;

Loc::loadMessages(__FILE__);

final class BoulderContestEditComponent extends CBitrixComponent implements Main\Engine\Contract\Controllerable, Main\Errorable
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
			if ($this->request->isPost() && $this->request->getPost('save'))
			{
				$result = new Main\Result();
				if (!check_bitrix_sessid())
				{
					$result->addError(new Bitrix\Hakaton\ErrorSessid());
				}
				else
				{
					$result = $this->saveAction();
				}
				if ($result->isSuccess())
				{
					LocalRedirect($APPLICATION->GetCurPageParam("page=index", Array("page", "sessid", "id")));
				}
			}
			$this->includeComponentTemplate();
		}
	}

	private function getItem()
	{
		if ($this->itemId > 0)
		{
			return Bitrix\Hakaton\Boulder\ContestTable::getById($this->itemId)->fetch();
		}
		return [];
	}

	private function getTracks()
	{
		if ($this->itemId > 0)
		{
			return Bitrix\Hakaton\Boulder\TrackTable::getList([
				'select' => ['*'],
				'filter' => ['CONTEST.ID' => $this->itemId],
				'order' => ['NUMBER' => 'ASC', 'ID' => 'ASC']
			])->fetchAll();
		}
		return [];
	}

	public function configureActions()
	{
		return [];
	}

	private function saveAction()
	{
		$data = [
			'TITLE' => $this->request->getPost('NAME'),
			'START_DATE' => new Main\Type\DateTime(
				$this->request->getPost('DATE').' '.$this->request->getPost('START'), 'Y-m-d H:i:s'
			),
			'FINISH_DATE' => new Main\Type\DateTime(
				$this->request->getPost('DATE').' '.$this->request->getPost('FINISH')
				, 'Y-m-d H:i:s'
			),
		];

		if ($this->itemId > 0)
		{
			$item = Hakaton\Boulder\Contest::getById($this->itemId);
			$result = $item->save($data);
		}
		else
		{
			$result = Hakaton\Boulder\Contest::create($data);
			if ($result->isSuccess())
			{
				$this->itemId = $result->getId();
				$item = Hakaton\Boulder\Contest::getById($result->getId());
			}
		}
		if ($result->isSuccess() && $this->request->getPost('TRACK'))
		{
			?><pre><b>$this->request->getPost('TRACK'): </b><?print_r($this->request->getPost('TRACK'))?></pre><?

			$result = $item->saveTracks($this->request->getPost('TRACK'));
		}
		if ($result->isSuccess() && $this->request->getPost('TRACK_NEW'))
		{
			$result = $item->addTracks($this->request->getPost('TRACK_NEW'));
		}
		return $result;
	}
	/**
	 * Getting array of errors.
	 * @return Error[]
	 */
	public function getErrors(): array
	{
		return $this->errorCollection->toArray();
	}

	/**
	 * Getting once error with the necessary code.
	 * @param string $code Code of error.
	 * @return ?Main\Error
	 */
	public function getErrorByCode($code)
	{
		return $this->errorCollection->getErrorByCode($code);
	}
}