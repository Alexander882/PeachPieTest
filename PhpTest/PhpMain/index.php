<?php

echo __DIR__;

require_once __DIR__ .'\SomeInterface.php';

class TroubleClass  implements \PhpInterfaces\SomeInterface {
	public function GetString(): string {
		return "abc";
	}
}

$troubleClass = new TroubleClass();
echo $troubleClass->GetString()."<br>";
