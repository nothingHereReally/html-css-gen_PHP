<?php
require_once "../CSSGenerator/CSSGenerator.php";

use Generator\CSS\CSSGenerator as CSSGen;

$multimenu = new CSSGen();

$multimenu->addSelector("*")
->addProp("margin", "0")
->addProp("padding", "0");

$multimenu->addSelector("body")
->addProp("margin-top", "30px")
->addProp("margin-left", "40px")
->setFontFamily("arial, verdana, tahoma, sans-serif");

$multimenu->addSelector("#mainmenu, .sub1, .sub2")
->addProp("list-style", "none");

// $multimenu->addSelector("#mainmenu")
// ->addProp("position", "absolute")
// ->addProp("bottom", "0");

$multimenu->addSelector("#mainmenu li")
->addProp("width", "125px")
->addProp("position", "relative")
->addProp("float", "left")
->addProp("margin-right", "4px")
->addProp("text-align", "center");

$multimenu->addSelector("#mainmenu a")
->addProp("background-color", "#ccc")
->addProp("color", "#000")
->addProp("text-decoration", "none")
->addProp("display", "block")
->addProp("width", "125px")
->addProp("height", "35px")
->addProp("line-height", "35px");

$multimenu->addSelector("#mainmenu .sub1 a")
->addProp("margin-top", "3px");

$multimenu->addSelector("#mainmenu .sub2 a")
->addProp("margin-left", "5px");

$multimenu->addSelector("#mainmenu li:hover > a")
->addProp("background-color", "#237291");

$multimenu->addSelector("#mainmenu li:hover a:hover")
->addProp("background-color", "aqua");

$multimenu->addSelector("#mainmenu .sub1")
->addProp("display", "none")
->addProp("position", "absolute");

$multimenu->addSelector("#mainmenu .sub2")
->addProp("display", "none")
->addProp("position", "absolute")
->addProp("top", "0px")
->addProp("left", "124px");

$multimenu->addSelector("#mainmenu li:hover .sub1")
->addProp("display", "block");

$multimenu->addSelector("#mainmenu .sub1 li:hover .sub2")
->addProp("display", "block");

$multimenu->addSelector("footer")
->addProp("position", "absolute")
->addProp("bottom", "0")
->addProp("height", "30vh")
->addProp("width", "100%")
->addProp("background-color", "black");

$multimenu->addSelector("#copyright-box")
->addProp("position", "absolute")
->addProp("bottom", "0")
->addProp("text-align", "center")
->addProp("color", "white")
->addProp("width", "100%")
->addProp("height", "1.2rem")
->addProp("line-height", "1.2rem");

$multimenu->put2file($file = "multimenu.css", $isAppend = false, $customDir = "../outdir/styles");
?>