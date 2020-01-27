<?php
require_once("observable.php");
require_once("abstract_widget.php");

//Model 1

$dat = new DataSource();

$widgetA = new BasicWidget();
$widgetB = new FancyWidget();

$dat->addObserver($widgetA);
$dat->addObserver($widgetB);

$dat->addRecord("drum", "$12.95", 1955);
$dat->addRecord("guitar", "$13.95", 2003);
$dat->addRecord("banjo", "$100.95", 1945);
$dat->addRecord("piano", "$120.95", 1999);

$widgetA->draw();
$widgetB->draw();

//Model 2

$dat2 = new DataSourceRichard();

$widget1 = new BasicWidgetRichard();
$widget2 = new FancyWidgetRichard();

$dat2->addObserver2($widget1);
$dat2->addObserver2($widget2);

$dat2->addRecord2("Ricardo", "Paredes", 1999, "DAW", 6456445);
$dat2->addRecord2("Cristian", "Tortosa", 2000, "DAW", 45685768);
$dat2->addRecord2("Marc", "Navarro", 2000, "DAW", 5645565);
$dat2->addRecord2("Andy", "Garcia", 1999, "SMX", 645454);
$dat2->addRecord2("Marc", "Villarroya", 1999, "ARI", 46565656);
$dat2->addRecord2("Alejandro", "Arrebola", 2000, "SMX", 67674554);



$widget1->draw();
$widget2->draw();



?>
