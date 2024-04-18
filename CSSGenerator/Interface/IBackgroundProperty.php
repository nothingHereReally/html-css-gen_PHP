<?php

interface IBackgroundProperty{
    public function setColor(string $color = "#FDFDFD"): IBackgroundProperty
    public function setImage_bg(string $imgDir): IBackgroundProperty
}
