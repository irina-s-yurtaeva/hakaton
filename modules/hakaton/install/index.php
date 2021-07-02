<?
Class Hakaton  extends \CModule {
	var $MODULE_ID = "hakaton";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;

	function hakaton()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
		{
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		}

		$this->MODULE_NAME = "Hakaton 2021";
		$this->MODULE_DESCRIPTION = "(Festival bouldering competition)";
	}

	function InstallFiles()
	{
		CopyDirFiles(__DIR__.'/public', $_SERVER["DOCUMENT_ROOT"], true, true);
	}

	function installDB()
	{
		global $DB;
		if (!$DB->Query("SELECT 'x' FROM b_rock_boulder_contest", true))
		{
			$this->errors = $DB->RunSQLBatch(__DIR__."/install.sql");

			if($this->errors !== false)
			{
				$GLOBALS["APPLICATION"]->ThrowException(implode("", $this->errors));
				return false;
			}
		}
		return true;
	}

	function DoInstall()
	{
		$this->InstallDB();
		$this->InstallFiles();

		RegisterModule("hakaton");
	}

	function DoUninstall()
	{
		UnRegisterModule("hakaton");
	}
}
