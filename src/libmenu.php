<?php
use Generator\CSS\CSSGenerator as CSSGen;

$style = new CSSGen("#mainmenu, .sub1, .sub2");
$style->addProp("list-style", "none");

$style->addSelector("#mainmenu li")
->addProp("width", "125px")
->addProp("position", "relative")
->addProp("float", "left")
->addProp("margin-right", "4px")
->addProp("text-align", "center");

$style->addSelector("#mainmenu a")
->addProp("font-weight", "bold")
->setBGColor("#fff")
->setColor("#000")
->addProp("text-decoration", "none")
->addProp("display", "block")
->addProp("width", "125px")
->addProp("height", "35px")
->addProp("line-height", "35px");

$style->addSelector("#mainmenu .sub1 a")
->setFontSize("12px");

$style->addSelector("#mainmenu li:hover > a")
->setBGColor("#237291")
->setColor("#fff");

$style->addSelector("#mainmenu li:hover a:hover")
->setBGColor("aqua")
->setColor("#000");

$style->addSelector("#mainmenu .sub1")
->addProp("display", "none")
->addProp("position", "absolute");

$style->addSelector("#mainmenu .sub2")
->addProp("display", "none")
->addProp("position", "absolute")
->addProp("top", "0px")
->addProp("left", "127px");

$style->addSelector("#mainmenu li:hover .sub1")
->addProp("display", "block");

$style->addSelector("#mainmenu .sub1 li:hover .sub2")
->addProp("display", "block");

$style->put2file( $file = "libmenu.css", $isAppend = false, $customDir = "../outdir/styles");
?>

