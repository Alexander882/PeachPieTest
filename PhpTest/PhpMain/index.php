<?php

class TroubleClass extends \DotNet\AbstractClass implements \PhpInterfaces\SomeInterface {
	public function GetInt(): int{
		return 1;
	}
	public function GetString(): string {
		return "abc";
	}
}

$troubleClass = new TroubleClass();
echo $troubleClass->GetInt()."<br>";
echo $troubleClass->GetString()."<br>";



class PhpInheritingClass extends \DotNet\DotNetBaseClass {
	public function __construct(int $param) {
		parent::__construct($param, "abc");
	}
}

$implementingClass = new \DotNet\ImplementingClass();
echo $implementingClass->GetString()."<br>";



$dotNetInheritingClass = new \DotNet\DotNetInheritingClass(5);
echo $dotNetInheritingClass->GetInt()."<br>";

$phpInheritingClass = new PhpInheritingClass();
echo $phpInheritingClass->GetInt()."<br>";