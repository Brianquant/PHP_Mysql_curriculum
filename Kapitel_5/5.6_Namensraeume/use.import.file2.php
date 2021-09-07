<?php 
// How to import classes, function and constants
use UserProfile\User; // Access Classes
use function UserProfile\hello; // Access function
use const \UserProfile\USR_ID; // Access a const

require_once('./use.import.file1.php');

// $user2 = new UserProfile\User(); // Approach 1
$user2 = new User();
hello();
echo USR_ID;


?>