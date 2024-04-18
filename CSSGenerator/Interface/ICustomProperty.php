<?php

interface ICustomProperty{
    public function addProp(string $property, string $value): ICustomProperty;
    public function addMultiProp(array $keyProp_valValue): ICustomProperty;
}
