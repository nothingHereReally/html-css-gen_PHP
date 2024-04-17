interface IColorProperty{
    public function setColor(string $color = "#010101"): IColorProperty;
    public function setOpacity(string $opacity = "1"): IColorProperty;
}

