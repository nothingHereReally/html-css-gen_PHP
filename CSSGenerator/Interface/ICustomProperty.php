<?php
interface ICustomProperty{
    public function addProp(string $property, string $value): ICustomProperty;
    public funciton addMultiProp(array $keyPop_valValue): ICustomProperty;
}
