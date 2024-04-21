<?php

namespace Generator\CSS;
use Generator\CSS\Interface\IBackgroundProperty as IBackgroundProperty;
use Generator\CSS\Interface\IColorProperty as IColorProperty;
use Generator\CSS\Interface\ICSSExport as ICSSExport;
use Generator\CSS\Interface\ICustomProperty as ICustomProperty;
use Generator\CSS\Interface\ICustomSelector as ICustomSelector;
use Generator\CSS\Interface\IFontProperty as IFontProperty;

class CSSGenerator implements ICustomSelector, ICustomProperty, IColorProperty, IBackgroundProperty, IFontProperty, ICSSExport{
	private array $__styleArr = [];
	private string $__currentSELECTOR = "";


	public function __construct(string $selector = "*" ){
		$this->__currentSELECTOR = $selector;
		$this->__styleArr[ $this->__currentSELECTOR ] = [];
		/*
		 * structure goal be( $__styleArr ) eg.:
		 * [
		 *		"a" => [
		 *		 	"color" => "#FDFDFD", -- font color
		 *		 	"font-family" => "sans-serif",
		 *		 	"background-color" => "#010101"
		 *		],
		 *		"p" => [
		 *		 	"color" => "#FDFDFD", -- font color
		 *		 	"font-family" => "roboto",
		 *		 	"font-size" => "13px",
		 *		 	"background-color" => "#010101"
		 *		]
		 * ]
		 */
	}

	// __destruct() results in ERRORS

	public function __destruct() {
		$this->__currentSELECTOR = NULL;
		$this->__styleArr = NULL;
	}

	private function __doesSelectorExist(string $selector = ""): bool{
		if( $selector!="" ){

			return isset( $this->__styleArr[ $selector ] );
		}

		return isset( $this->__styleArr[ $this->__currentSELECTOR ] );
	}
	private function __setKeyVal(string $key, string $val): void{
		$this->__styleArr[ $this->__currentSELECTOR ][$key] = $val;
	}
	private function __selectSelector(string $selector): CSSGenerator{
		$this->__currentSELECTOR = $selector;
		if( $this->__doesSelectorExist($selector) ){

			return $this;
		}
		$this->__styleArr[ $this->__currentSELECTOR ] = [];

		return $this;
	}
	private function __error(): void{
		echo "error, must select selector first";
		throw new ErrorException("error, must select selector first", 1);
	}

	// IBackgroundProperty
	public function setBGColor(string $color = "#FDFDFD"): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal("background-color", $color);

			return $this;
		}
		$this->__error();
	}
	public function setImage_bg(string $imgDir): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal("background-image", "url(\"".$imgDir."\")");

			return $this;
		}
		$this->__error();
	}

	// IColorProperty
	public function setColor(string $color = "#010101"): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal("color", $color);

			return $this;
		}
		$this->__error();
	}
	public function setOpacity(string $opacity = "1"): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal( "opacity", (((float)$opacity <= 1.0)? $opacity: (string)( (float)$opacity/100 )) );

			return $this;
		}
		$this->__error();
	}

	// IFontProperty
	public function setFontFamily(string $family = "sans-serif"): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal("font-family", $family);

			return $this;
		}
		$this->__error();
	}
	public function setFontSize(string $size = "16px"): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal("font-size", $size);

			return $this;
		}
		$this->__error();
	}
	public function setFontStyle(string $style = "normal"): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal("font-style", $style);

			return $this;
		}
		$this->__error();
	}

	// ICustomProperty
	public function addProp(string $property, string $value): CSSGenerator{
		/*
		* careful if want to use this function
		* $property: $value; // look like on CSS
		 */
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal($property, $value);

			return $this;
		}
		$this->__error();
	}
	public function addMultiProp(array $keyProp_valValue): CSSGenerator{
	/* 
	 * careful if want to use this function
	 * keyProp_valValue, mandated look eg.:
	 * [
	 *	"font-family" => "sans-serif",
	 *	"font-size" => "14px",
	 *	"color" => "#FDFDFD",
	 *	"background-color" => "#010101"
	 * ]
		 */
		if( $this->__doesSelectorExist() ){
			foreach( $keyProp_valValue as $k => $v ){
				$this->__setKeyVal($k, $v);
			}

			return $this;
		}
		$this->__error();
	}

	// ICustomSelector
	public function addElement(string $selector): CSSGenerator{
		/* $__styleArr
		 * $__currentSELECTOR
		 * if exist already will not overwrite
		 * else will add selector
		 */
		return $this->__selectSelector( $selector );
	}
	public function addClass(string $selector): CSSGenerator{
		return $this->__selectSelector( ".".$selector );
	}
	public function addID(string $selector): CSSGenerator{
		return $this->__selectSelector( "#".$selector );
	}
	public function selectSelector(string $selector): CSSGenerator{
		return $this->__selectSelector( $selector );
	}

	// ICSSExport
	public function getCSStext(): string{
		$out = "";
		foreach( $this->__styleArr as $selector => $props ){
			$out = $out.$selector;
			$out = $out."{\n";
			foreach ($props as $prop => $val) {
				$out = $out."    ".$prop.": ".$val.";\n";
			}
			$out = $out."}\n";
		}

		return $out;
	}
	public function put2file(string $filedir = "css.file", bool $isAppend = true, bool $isCustomDir = false): bool{
		if( $isCustomDir ){
			return file_put_contents($filedir, $this->getCSStext(), ($isAppend? FILE_APPEND: 0));
		}
		mkdir("./css", 0755, true);
		return file_put_contents("./css/".$filesir, $this->getCSStext(), ($isAppend? FILE_APPEND: 0));
	}
	public function mkfile(): bool{
		return $this->put2file();
	}
}

