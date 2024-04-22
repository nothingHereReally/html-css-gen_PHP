<?php
namespace Generator\CSS\Interface;
interface ICSSExport{
	public function getCSStext(): string;
	public function put2file(string $file = "file.css", bool $isAppend = true, string $customDir = "./css"): bool;
	public function mkfile(): bool;
}

