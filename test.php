<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
	$APPLICATION->SetTitle("тест");
?><?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
	
	),
	false
);?><br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>