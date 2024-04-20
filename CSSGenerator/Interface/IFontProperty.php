<?php
namespace Generator\CSS\Interface;
interface IFontProperty{
    public function setFontFamily(string $family = "sans-serif"): IFontProperty;
    public function setFontSize(string $size = "16px"): IFontProperty;
    public function setFontStyle(string $style = "normal"): IFontProperty;
}

