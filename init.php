<?
AddEventHandler("iblock", "OnAfterIBlockElementUpdate", Array("UpdateElement", "Update"));
	class UpdateElement
	{
		
		public static $disableHandler = false;
		 
		function Update(&$arFields)
		{ 
			if (self::$disableHandler)
				return;
				
			CModule::IncludeModule("iblock");
			
			
			if( $arFields["IBLOCK_ID"] == "5")
			{

				$el = new CIBlockElement;
				
				$arLoadProductArray = Array(
					"TAGS" => $arFields['XML_ID']
				);
				
				self::$disableHandler = true; 
				if($res = $el->Update($arFields["ID"], $arLoadProductArray))
				 
				{
					
				}
	 
			}
			 
		}
	}
?>