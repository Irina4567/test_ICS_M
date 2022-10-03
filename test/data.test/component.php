<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['ROWS'] = $arParams["TEMPLATE_FOR_ROWS"];
$arResult['COLUMNS'] = $arParams["TEMPLATE_FOR_COLUMNS"];
$arResult['BLOCKS'] = $arParams["TEMPLATE_FOR_BLOCKS"];
$this->IncludeComponentTemplate();
?>