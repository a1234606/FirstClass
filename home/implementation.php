<?php

$foo = "bar";
$$foo = "data";
echo "\$foo:\t";
echo $foo;
echo "\n";

echo "\${\$foo}:\t";
echo ${$foo};
echo "\n";

echo "\$\$foo:\t";
echo $$foo;
echo "\n";

echo "\$\$bar:\t";
echo $bar;
echo "\n";
?>
