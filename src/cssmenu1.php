<?php
use Generator\CSS\CSSGenerator as CSSGen;

$cssmenu1 = new CSSGen();

$cssmenu1->addSelector("*")
->addProp("margin", "0px")
->addProp("padding", "0px");

$cssmenu1->addSelector("body")
->addProp("margin-top", "20px")
->addProp("margin-left", "20px")
->setFontFamily("verdana, arial, sans-serif");

$cssmenu1->addSelector("#mainmenu")
->addProp("list-style", "none");

$cssmenu1->addSelector("#mainmenu li")
->setBGColor("#174557")->addProp("width", "125px")
->addProp("text-align", "center")
->addProp("float", "left")
->addProp("border-left", "1px solid #237291")
->addProp("border-right", "1px solid #D5E1E6");

$cssmenu1->addSelector("#mainmenu a")
->setColor("#fff")->addProp("text-decoration", "none")
->addProp("display", "block")
->addProp("width", "125px")
->addProp("height", "40px")
->addProp("line-height", "40px");

$cssmenu1->addSelector("#mainmenu a:hover")
->setBGColor("#237291");

$cssmenu1->addSelector("#mainmenu a:active")
->setBGColor("#f00");

$cssmenu1->put2file( $file = "cssmenu1.css", $isAppend = false, $customDir = "./styles");
?>