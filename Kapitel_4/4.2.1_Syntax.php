<?php 
// Pass-by-reference
$string_1 = "No System&nbsp;";
$string_2 = &$string_1;
echo $string_2;
$string_1 = "is SAFE!";
echo $string_2;

// Variable Variablen
$git = 'branch';
$branch = 'git_add';
$git_add = 'git_commit_m';
$git_commit_m = 'git_push';
echo "<br>";
echo $$git;
echo "<br>";
echo $$$git;
echo "<br>";
echo $$$$git;


?>