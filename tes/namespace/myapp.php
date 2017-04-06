<?php
namespace App\Lib1;
use App\Lib2 as dua;
use App\Lib2;
header('Content-type: text/plain');
require_once('lib1.php');
require_once('lib2.php');


echo MYCONST . "\n";
echo MyFunction() . "\n";
echo MyClass::WhoAmI() . "\n";

echo Lib2\MYCONST . "\n";
echo dua\MyFunction() . "\n";
echo MyClass::WhoAmI() . "\n";
?>
