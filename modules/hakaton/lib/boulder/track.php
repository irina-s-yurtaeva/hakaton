<?php
namespace Bitrix\Hakaton\Boulder;

use Bitrix\Main\Application;
use Bitrix\Main\DB\SqlExpression;
use Bitrix\Main;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\ReferenceField;
use \Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Fields\BooleanField;
use Bitrix\Main\ORM\Fields\DatetimeField;
use Bitrix\Main\ORM\Fields\EnumField;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\ORM\Fields\ScalarField;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\TextField;
use Bitrix\Main\ORM\Query\Join;
use Bitrix\Main\Type\DateTime;

Loc::loadMessages(__FILE__);

class TrackTable extends \Bitrix\Main\Entity\DataManager
{
	public static function getTableName()
	{
		return 'b_rock_boulder_track';
	}

	public static function getMap()
	{
		return [
			(new IntegerField("ID", ["primary" => true, "autocomplete" => true])),
			(new IntegerField("NUMBER")),
			(new StringField("TITLE", ["size" => 255])),
			(new IntegerField("CONTEST_ID")),
			(new Reference("CONTEST", ContestTable::class, Join::on("this.CONTEST_ID", "ref.ID"))),
		];
	}
}

