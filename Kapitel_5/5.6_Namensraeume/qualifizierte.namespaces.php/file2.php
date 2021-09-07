<?php 

namespace Foo\Bar;
include './file1.php';

const FOO = 2;
function foo() {}
class foo
{
    static function staticmethod() {}
}

/* Unqualifizierter Name */
foo(); // wird als Funktion Foo\Bar\foo aufgelöst
foo::staticmethod(); // wird als Klasse Foo\Bar\foo und Methode staticmethod aufgelöst
echo FOO; // gibt die Konstante Foo\Bar\FOO aus
echo "<br>";

/* Qualifizierter Name */
subnamespace\foo(); // wird als Funktion Foo\Bar\subnamespace\foo aufgelöst
subnamespace\foo::staticmethod(); // wird als Klasse Foo\Bar\subnamespace\foo und
                                  // Methode staticmethod aufgelöst
echo subnamespace\FOO; // gibt die Konstante Foo\Bar\subnamespace\FOO aus
echo "<br>";

/* Vollständig qualifizierter Name */
\Foo\Bar\foo(); // wird als Funktion Foo\Bar\foo aufgelöst
\Foo\Bar\foo::staticmethod(); // wird als Klasse Foo\Bar\foo und Methode staticmethod aufgelöst
echo \Foo\Bar\FOO; // gibt die Konstante Foo\Bar\FOO aus
echo "<br>";
?>