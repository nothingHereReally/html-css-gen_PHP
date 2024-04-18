<?php

interface IBackgroundProperty{
    public function setBGColor(string $color = "#FDFDFD"): IBackgroundProperty
    public function setImage_bg(string $imgDir): IBackgroundProperty
}
