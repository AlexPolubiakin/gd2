<?php
require_once 'Chart.php';
//инициализация 
$ini = new Chart;
// рисуем фон
$img = $ini->drawBg(300,300);
// назначаем цвета
$red        = imagecolorallocate($img,255,0,0);
$green      = imagecolorallocate($img,50,205,50); 
$blue       = imagecolorallocate($img,0,0,255);
$orange     = imagecolorallocate($img,255,165,0);
$yellow     = imagecolorallocate($img,255,255,0);
$teal       = imagecolorallocate($img,0,128,128);
$navy       = imagecolorallocate($img, 0x00, 0x00, 0x80);
$grey       = imagecolorallocate($img,192,192,192);
$white      = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
$black      = imagecolorallocate($img,0,0,0);
// составляем массив цветов
$colorArr = [$red,$green,$blue,$orange,$yellow,$teal,$navy,$grey,$white,$black];
//массив с информацией
$dataArr = [25,15,60];
//рисуем диаграмму 
$ini->drawDiagramm($img,$dataArr,$colorArr);
//вывод изображения
$ini->imgPrint($img);
?>