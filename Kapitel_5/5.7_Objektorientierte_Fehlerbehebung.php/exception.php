<?php
// class Exception implements Throwable { //Throwable ist das zugrundeliegende Interface aller Objekte, die mittels des throw-Statements geworfen werden können, inklusive Error und Exception.
//     /* Eigenschaften */
//     protected string $message;
//     protected int $code;
//     protected string $file;
//     protected int $line;
//     /* Methoden */
//     public __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
//     final public getMessage(): string
//     final public getPrevious(): ?Throwable
//     final public getCode(): int
//     final public getFile(): string
//     final public getLine(): int
//     final public getTrace(): array
//     final public getTraceAsString(): string
//     public __toString(): string
//     final private __clone(): void
//     }

error_reporting(E_ALL);
require_once('./class.Fehlerausgabe.php');

try {
    if(!@mail()) {
        $nachricht = 'Die Email konnte nicht versendet werden';
        throw new Fehlerausgabe($nachricht, 1);
    }
}
catch (Fehlerausgabe $f) {
    echo $f;
}



?>