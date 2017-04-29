<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("First");
?><? $APPLICATION->IncludeComponent(
"my_com:first_com.exec",
".default",
Array(
),
false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>