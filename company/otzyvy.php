<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Отзывы");
$APPLICATION->SetPageProperty("keywords", "Отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>
    Text here....
<p><? $APPLICATION->ShowTitle() ?></p>
<p><? $APPLICATION->ShowProperty('test') ?></p>
<p><? $APPLICATION->ShowProperty('description') ?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>