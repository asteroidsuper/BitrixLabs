<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");
if(CModule::IncludeModule("iblock"))
{
$el = new CIBlockElement;

$arLoadProductArray = Array(
  "MODIFIED_BY"    		=> $USER->GetID(), // ������� ������� ������� �������������
  "CODE"				=> "my_infoblock_element_2",
  "IBLOCK_SECTION_ID" 	=> false,          // ������� ����� � ����� �������
  "IBLOCK_ID"      		=> 5,
  "NAME"           		=> "�������",
  "ACTIVE"         		=> "Y",            // �������
  "PREVIEW_TEXT"   		=> "����� ��� ������ ���������",
  "DETAIL_TEXT"    		=> "����� ��� ���������� ���������"
  );

if($PRODUCT_ID = $el->Add($arLoadProductArray))
  echo "New ID: ".$PRODUCT_ID;
else
  echo "Error: ".$el->LAST_ERROR;
}
?>