<?php
namespace Bitrix\Hakaton;

use \Bitrix\Main;
class ErrorSessid extends Main\Error
{
	public function __construct($customData = null)
	{
		parent::__construct(Main\Localization\Loc::GetMessage('ROCK_BAD_SESSID'), 'sessid', $customData);
	}
}