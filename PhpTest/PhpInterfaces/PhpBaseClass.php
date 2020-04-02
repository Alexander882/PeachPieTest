<?php

namespace PhpInterfaces;

class PhpBaseClass
{
	private $val;
	public function __construct(int $param){
		$this->val = $param;
	}

	public function GetInt(): int {
		return $this->val;
	}
}
