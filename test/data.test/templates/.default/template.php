<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init(['popup']);

$arResult['ROWS'] != null ? $rows = $arResult['ROWS'] :  $rows = 5;
$arResult['COLUMNS'] != null ? $columns = $arResult['COLUMNS'] :  $columns = 3;
$arResult['BLOCKS'] != null ? $blocks = $arResult['BLOCKS'] :  $blocks = 3;
$modal_blocks = '';

for ($i = 0; $i < $blocks ; $i++) {
    $modal_blocks .='<div class="block"><p>Блок</p></div>';
}
$modal = '<div class="blocks">'.$modal_blocks.'</div>';
?>

<button class="button-popup">Кнопка</button>
<table class="table">
    <? for ($i = 0; $i < $rows; $i++) {?>
        <tr class="table-row">
            <? for ($j = 0; $j < $columns; $j++) {?>
                <td class="table-cell"><?= $j + 1?> </td>
            <?}?>
        </tr>
    <?}?>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script>
    BX.ready(function () {
        let popup = BX.PopupWindowManager.create("popup-message", BX('element'), {
            content: '<?= $modal?>',
            width: 800,
            height: 400,
            zIndex: 100,
            closeIcon: {
                opacity: 1
            },
            titleBar: 'Модальное окно',
            closeByEsc: true,
            darkMode: false,
            autoHide: true,
            draggable: true,
            resizable: true,
            min_height: 100,
            min_width: 100,
            lightShadow: true,
            angle: true,
            overlay: {
                backgroundColor: 'black',
                opacity: 500
            },
        });

        $('.button-popup').on('click', function(e) {
            e.preventDefault();
            popup.show(300);
        });
    });
</script>
