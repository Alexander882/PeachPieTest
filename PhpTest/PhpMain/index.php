<?php

require_once __DIR__ .'/SomeInterface.php';

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
