<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");
if(CModule::IncludeModule("iblock"))
{
$ib = new CIBlock;
$ib->add(array(
"ACTIVE" => "Y",
"NAME" => "Добавленный скриптом",
"CODE" => "ADDED_BY_PHP",
"IBLOCK_TYPE_ID" => "my_infoblock_type",
"SITE_ID" => array("s1"),
"DESCRIPTION" => "Был добавлен скриптом php",
"DESCRIPTION_TYPE" => "text"
));


}?>