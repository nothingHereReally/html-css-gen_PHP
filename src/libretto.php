<?php
require_once "../CSSGenerator/CSSGenerator.php";

use Generator\CSS\CSSGenerator as CSSGen;

$style = new CSSGen("*");
$style->addProp("margin", "0px")
->addProp("padding", "0px");

$style->addSelector("body")
->addProp("margin-top", "20px")
->setBGColor("#ccc")
->setFontFamily("arial, verdana, tahoma, sans-serif");

$style->addID("header")
->addProp("margin", "0 auto")
->addProp("width", "1000px")
->addProp("min-height", "200px");

$style->addID("leftheader")
->addProp("height", "200px")
->addProp("width", "200px")
->addProp("background", "#fff url('../images/libretto2_200px.png') no-repeat")
->addProp("border-top-left-radius", "25px")
->addProp("float", "left");

$style->addID("righthead")
->addProp("height", "200px")
->addProp("width", "800px")
->addProp("background", "#fff url('../images/libretto_banner.png') no-repeat")
->addProp("border-top-left-radius", "25px")
->addProp("float", "left");

$style->addID("mainmenubar")
->addProp("margin", "0 auto")
->addProp("width", "1000px")
->addProp("height", "35px")
->setBGColor("#fff")
->addProp("border-bottom", "2px solid black");

$style->addID("maincontainer")
->addProp("overflow", "hidden")
->addProp("margin", "0 auto")
->addProp("width", "1000px")
->addProp("height", "auto")
->setBGColor("#fff")
->addProp("border-bottom", "1px solid black");

$style->addID("headline")
->addProp("width", "1000px")
->addProp("height", "350px");

$style->selectSelector("#headlleft img")
->addProp("display", "block")
->addProp("padding-top", "40px")
->addProp("margin", "0 auto");

$style->addID("headlleft")
->addProp("width", "600px")
->addProp("float", "left");

$style->addID("headlright")
->addProp("width", "400px")
->addProp("float", "left");

$style->addID("left")
->addProp("width", "300px")
->addProp("min-height", "200px")
->addProp("height", "auto")
->setBGColor("#fff")
->addProp("float", "left");

$style->addID("right")
->addProp("width", "700px")
->addProp("height", "auto")
->setBGColor("#fff")
->addProp("float", "left");

$style->selectSelector("#right .blockheadings")
->addProp("display", "block")
->setFontFamily('"Arial Narrow", arial, sans-serif')
->setFontSize("30px")
->setColor('#fff')
->addProp("padding-left", "10px")
->setBGColor("#65A9D6");

$style->selectSelector("#right #placeholder")
->addProp("margin", "0 auto")
->addProp("height", "auto")
->addProp("padding-top", "30px")
->addProp("width", "600px");

$style->selectSelector("#right .sections")
->addProp("padding", "2px")
->addProp("float", "left")   
->addProp("margin-right", "50px")
->addProp("margin-bottom", "50px")
->addProp("width", "220px")
->addProp("min-height", "50px")
->addProp("border-top-left-radius", "10px")
->addProp("border-top-right-radius", "10px")
->addProp("border", "1px solid #ccc")
->setFontSize("12px");

$style->selectSelector("#right .sections p")
->addProp("border-top-left-radius", "10px")
->addProp("border-top-right-radius", "10px")
->setBGColor("#65A9D6")
->setFontFamily("'Arial Narrow', arial, sans-serif")
->setFontSize("30px")
->setColor("#fff")
->addProp("padding-left", "5px")
->addProp("height", "40px");

$style->selectSelector("#right .sectiontext")
->addProp("text-align", "justify");

$style->addID("footer")
->addProp("margin", "0 auto")
->addProp("width", "1000px")
->addProp("min-height", "200px")
->setBGColor("#000")
->addProp("border-bottom-left-radius", "25px")
->addProp("border-bottom-right-radius", "25px")
->addProp("position", "relative");

$style->selectSelector("#headlright .headlineimpact")
->addProp("display", "block") 
->setFontFamily("tahoma, sans-serif")
->setFontSize("45px")
->addProp("font-weight", "normal")
->setColor("#00f")
->addProp("text-align", "center");

$style->selectSelector("#headlright .headlinetext")
->addProp("display", "block")
->setFontFamily("arial, verdana, sans-serif")
->setFontSize("30px")
->addProp("font-weight", "normal")
->setColor("#f00")
->addProp("text-align", "center");

$style->selectSelector("#footer #copyrighttext")
->addProp("display", "block")
->addProp("text-align", "right")
->setFontSize("13px")
->setColor("#fff")
->addProp("position", "absolute")
->addProp("bottom", "20px")
->addProp("right", "10px");

$style->put2file( $file = "libretto.css", $isAppend = false, $customDir = "../outdir/styles");
?>

