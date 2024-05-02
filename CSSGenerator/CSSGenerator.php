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
		 *		 	"font-family" => "sans-serif, Roboto", -- mandated structure if multiple values
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
		// if( $this->__doesSelectorExist($selector) ){ // same as below, just below is shorter
		if( $this->__doesSelectorExist() ){

			return $this;
		}
		$this->__styleArr[ $this->__currentSELECTOR ] = [];

		return $this;
	}
	private function __error(string $msg = "must select selector first"): void{
		echo "error, ".$msg;
		throw new ErrorException("error, ".$msg, 1);
	}

	// IBackgroundProperty
	public function setBGColor(string $color = "#FDFDFD"): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal("background-color", $color);

			return $this;
		}
		$this->__error();
	}
	public function setImage_bg(string $imgDirOrURL): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal("background-image", "url(\"".$imgDirOrURL."\")");

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
			if( (float)$opacity<0 || 100<(float)$opacity ){
				$this->__error("opacity can just be between 0 to 1, or 0 to 100, but will just overwrite to 0 to 1")
			}
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
			if( isset($this->__styleArr[ $this->__currentSELECTOR ][$property]) ){
				$this->__error("property already exist, use alterProp(\"prop\", \"value\") to overwrite the value");
			}
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
	public function alterProp(string $property, string $value): CSSGenerator{
		if( $this->__doesSelectorExist() ){
			$this->__setKeyVal($property, $value);

			return $this;
		}
		$this->__error();
	}
	public function getPropValues(string $property): string{
		if( $this->__doesSelectorExist() && isset($this->__styleArr[ $this->__currentSELECTOR ][$property]) ){
			return $this->__styleArr[ $this->__currentSELECTOR ][$property];
		}
		$this->error("that property is not set, use addProp(), to set a value");
	}
	public function isPropExist(string $property): bool{
		return isset( $this->__styleArr[ $this->__currentSELECTOR ][$property] );
	}

	// ICustomSelector
	public function addSelector(string $selector): CSSGenerator{
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
	public function put2file(string $file = "file.css", bool $isAppend = true, string $customDir = "./css"): bool{
		if( $customDir!="" || $customDir!="./" || $customDir!="/" ){
			mkdir($customDir, 0755, true);
			return file_put_contents("./".$filesir, $this->getCSStext(), ($isAppend? FILE_APPEND: 0));
		}
		return file_put_contents($customDir."/".$filesir, $this->getCSStext(), ($isAppend? FILE_APPEND: 0));
	}
	public function mkfile(): bool{
		return $this->put2file();
	}
}

