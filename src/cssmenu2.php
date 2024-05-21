<?php
require_once "../CSSGenerator/CSSGenerator.php";

use Generator\CSS\CSSGenerator as CSSGen;

$cssmenu2 = new CSSGen(".menuHolder");

$cssmenu2
->addProp("width", "650px")
->addProp("height", "31px")
->addProp("position", "relative")
->addProp("margin-left", "10px");

$cssmenu2->addSelector(".menu, .menu ul")
->addProp("padding", "0;")
->addProp("margin", "0")
->addProp("list-style", "none")
->addProp("position", "relative")
->setFontFamily("arial, sans-serif");

$cssmenu2->addSelector(".menu ")
->addProp("width", "650px")
->addProp("height", "30px")
->addProp("overflow", "hidden")
->addProp("position", "absolute")
->addProp("left", "0")
->addProp("top", "0");

$cssmenu2->addSelector(".menu li")
->addProp("float", "left")
->addProp("position", "relative")
->addProp("z-index", "10");

$cssmenu2->addSelector(".menu li a")
->addProp("float", "left")
->addProp("display", "block")
->addProp("height", "31px")
->addProp("padding", "0 10px")
->addProp("line-height", "30px")
->addProp("position", "relative")
->addProp("z-index", "20")
->setColor("#ddd")
->addProp("text-decoration", "none")
->setFontSize("12px")
->addProp("background", "url(slidemenu/back.png) no-repeat center top");

$cssmenu2->addSelector(".menu li.first a")
->addProp("background", "url(slidemenu/back.png) no-repeat left top");

$cssmenu2->addSelector(".menu li.pad")
->addProp("width", "90px")->addProp("height", "31px");

$cssmenu2->addSelector(".menu li.pad b")
->addProp("display", "block")
->addProp("height", "31px")
->addProp("width", "90px")
->addProp("background", "url(slidemenu/back.png) no-repeat right top");

$cssmenu2->addSelector(".menu ul")
->addProp("width", "180px")
->addProp("height", "auto")
->addProp("position", "absolute")
->addProp("top", "-130px")
->addProp("transition", "0.8s ease-in-out")
->addProp("-o-transition", "0.8s ease-in-out")
->addProp("-moz-transition", " 0.8s ease-in-out")
->addProp("-webkit-transition", "all 0.8s ease-in-out")
->addProp("z-index", "1")
->addProp("padding", "10px 0")
->addProp("background", "#000")
->addProp("-webkit-box-shadow", "2px 2px 3px rgba(0, 0, 0, 0.5)")
->addProp("-moz-box-shadow", "2px 2px 3px rgba(0, 0, 0, 0.5)")
->addProp("box-shadow", "px 2px 3px rgba(0, 0, 0, 0.5)")
->addProp("-webkit-border-radius", "8px")
->addProp("-moz-border-radius", "8px")
->addProp("border-radius", "8px");

$cssmenu2->addSelector(".menu ul li")
->addProp("width", "180px");

$cssmenu2->addSelector(".menu ul li a")
->addProp("width", "160px")
->addProp("height", "20px")
->addProp("line-height", "20px")
->addProp("background", "transparent");

$cssmenu2->addSelector(".menu:hover")
->addProp("height", "200px");

$cssmenu2->addSelector(".menu a:hover")
->setColor("#0cf");

$cssmenu2->addSelector(".menu li:hover > a")
->setColor("#0cf");

$cssmenu2->addSelector(".menu li:hover ul")
->addProp("-webkit-transform", "translate(0,161px)")
->addProp("-moz-transform", "translate(0,161px)")
->addProp("-o-transform", "translate(0,161px)")
->addProp("transform", "translate(0,161px)");

$cssmenu2->put2file( $file = "cssmenu2.css", $isAppend = false, $customDir = "../outdir/styles/");
?>
