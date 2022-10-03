<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "TEMPLATE_FOR_ROWS" => array(
            "PARENT" => "BASE",
            "NAME" => "Количество строк",
            "TYPE" => "STRING",
            "DEFAULT" => "5",
        ),
        "TEMPLATE_FOR_COLUMNS" => array(
            "PARENT" => "BASE",
            "NAME" => "Количество столбцов",
            "TYPE" => "STRING",
            "DEFAULT" => "3",
        ),
        "TEMPLATE_FOR_BLOCKS" => array(
            "PARENT" => "BASE",
            "NAME" => "Количество блоков",
            "TYPE" => "STRING",
            "DEFAULT" => "3",
        ),
    ),
);