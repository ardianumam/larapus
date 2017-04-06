<?php
// application library 2
namespace App\Lib2;

const MYCONST = 'Cons di lib 2';

function MyFunction() {
	return 'function lib 2';
}

class MyClass {
	static function WhoAmI() {
		return __METHOD__;
	}
}
?>