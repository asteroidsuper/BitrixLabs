<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");
if(CModule::IncludeModule("iblock"))
{
$el = new CIBlockElement;

$arLoadProductArray = Array(
  "MODIFIED_BY"    		=> $USER->GetID(), // элемент изменен текущим пользователем
  "CODE"				=> "my_infoblock_element_2",
  "IBLOCK_SECTION_ID" 	=> false,          // элемент лежит в корне раздела
  "IBLOCK_ID"      		=> 5,
  "NAME"           		=> "Элемент",
  "ACTIVE"         		=> "Y",            // активен
  "PREVIEW_TEXT"   		=> "текст для списка элементов",
  "DETAIL_TEXT"    		=> "текст для детального просмотра"
  );

if($PRODUCT_ID = $el->Add($arLoadProductArray))
  echo "New ID: ".$PRODUCT_ID;
else
  echo "Error: ".$el->LAST_ERROR;
}
?>