<?php
namespace Generator\CSS\Interface;
interface ICSSExport{
	public function getCSStext(): string;
	public function put2file(string $filedir = "css.file", bool $isAppend = true, bool $isCustomDir = false): bool;
	public function mkfile(): bool;
}

