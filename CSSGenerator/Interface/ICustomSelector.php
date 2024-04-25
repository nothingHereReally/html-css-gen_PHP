<?php
namespace Generator\CSS\Interface;
interface ICustomSelector{
    public function addSelector(string $selector): ICustomSelector;
    public function addClass(string $selector): ICustomSelector;
    public function addID(string $selector): ICustomSelector;
    public function selectSelector(string $selector): ICustomSelector;
    /*
     * possible formation:
     * addElement("a")->setFontFamily("sans-serif")
     * a{
     *      font-family: sans-serif;
     * }
     * same goes with addClass, addID, addSelector
     *
     * but different on selectSelector, if exist add style, else error
     * selectSelector("a")->setFontFamilyt("roboto"), overwrite
     *  ------------------------
     *  on php possible be:
     *  ["a" => [
     *      "font-family" => "roboto",
     *      "color" => "#123456"
     *  ],
     *  [".className" => [ // but on call: addClass("className")
     *      "font-family" => "sans-serif",
     *      "color" => "#12FFAA"
     *  ]]
     *  ]
     *  ------------------------
     * a{
     *      font-familty: roboto;
     * }
     */
}

