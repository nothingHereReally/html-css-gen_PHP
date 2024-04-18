<?php

namespace Generator\CSS;

class CSSGenerator implements ICustomSelector, ICustomProperty, IColorProperty, IBackgroundProperty, IFontProperty, ICSSExport{

	private array $__styleArr = [];
	private string $__currentSELECTOR = "";
	public function __construct(string $selector=NULL) {
		if( $selector!=NULL ){
			$this->__styleArr[$selector] = [];
			$this->__currentSELECTOR = $selector;
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
	}
	public function __destruct() {
		$this->__currentSELECTOR = NULL;
		$this->__styleArr = NULL;
		$this = NULL;
	}
	private function __doesSelectorExist(string $selector = ""): bool{
		if( $selector!="" ){
			return isset( $this->__styleArr[ $selector ] );
		}
		return $this->__currentSELECTOR!="" && isset( $this->__styleArr[ $this->__currentSELECTOR ] );
	}
	private function __setKeyVal(string $key, string $val): void{
		$this->__styleArr[ $this->__currentSELECTOR ][$key] = $val;
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
			$this->__setKeyVal("opacity", ( (int)$opacity <= 1 )? $opacity: (string)( (int)$opacity/100 ));
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
		if( $this->__doesSelectorExist($selector) ){
			$this->__currentSELECTOR = $selector;
			return $this;
		}
		$this->__currentSELECTOR = $selector;
		$__styleArr[ $this->__currentSELECTOR ] = [];
		return $this;
	}
	public function addClass(string $selector): CSSGenerator{
		$selector = ".".$selector;
		if( $this->__doesSelectorExist($selector) ){
			$this->__currentSELECTOR = $selector;
			return $this;
		}
		$this->__currentSELECTOR = $selector;
		$__styleArr[ $this->__currentSELECTOR ] = [];
		return $this;
	}
	public function addID(string $selector): CSSGenerator{
		$selector = "#".$selector;
		if( $this->__doesSelectorExist($selector) ){
			$this->__currentSELECTOR = $selector;
			return $this;
		}
		$this->__currentSELECTOR = $selector;
		$__styleArr[ $this->__currentSELECTOR ] = [];
		return $this;
	}
	public function selectSelector(string $selector): CSSGenerator{
		if( $this->__doesSelectorExist($selector) ){
			$this->__currentSELECTOR = $selector;
			return $this;
		}
		$this->__currentSELECTOR = $selector;
		$this->__styleArr[ $this->__currentSELECTOR ] = [];
		return $this;
	}

	// ICSSExport
	public function getCSStext(): string{
		$out = "";
		foreach( $this->__styleArr as $selector => $props ){
			$out = $out.$selector;
			$out = $out."{\n";
			foreach ($props as $prop => $val) {
				$out = $out."    ".$prop.": ".$val";\n";
			}
			$out = $out."}\n";
		}
		return $out;
	}
}
