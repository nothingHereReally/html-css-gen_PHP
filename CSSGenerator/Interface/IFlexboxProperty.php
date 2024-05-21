<?php
namespace Generator\CSS\Interface;
interface IFlexboxProperty{
    public function setDisplay(string $display = "flex"): IFlexboxProperty;
    public function setFlexDirection(string $direction = "column"): IFlexboxProperty;
    public function setFlexWrap(string $wrap = "wrap"): IFlexboxProperty;
    public function setFlexFlow(string $flow = "row wrap"): IFlexboxProperty;
    public function setJustifyContent(string $content = "center"): IFlexboxProperty;
    public function setAlignItems(string $item = "center"): IFlexboxProperty;
    public function setalignContent(string $content = "space-between"): IFlexboxProperty;
}