<?php 

// create_function veraltet
$newfunc = create_function('$a,$b', 'return $a + $b');
echo $newfunc(2, 2);

// Anonymous function
$merge = function($mainBranch, $masterBranch) {
    return $mainBranch . " " . $masterBranch;
};

$branches = array("Code", "is fun!");

echo array_reduce($branches, $merge);

?>