<?php
// application library 1
namespace App\Lib1;


const MYCONST = 'Constant di lib 1';

function MyFunction() {
	return "function lib 1";
}

class MyClass {
	static function WhoAmI() {
		return __METHOD__;
	}
}
?>