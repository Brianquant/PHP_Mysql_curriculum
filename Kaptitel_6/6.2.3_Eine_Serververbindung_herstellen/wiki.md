# Eine Serververbindung aufbauen

## Prerequisits
- Client: mysql.exe (unter Windows) oder mysql (unter Linux)
- XAMPP ist ein Programmpacket, was folgendes beinhaltet: 
    - Apache: Webserver
    - MariaDB oder Mysql: Datenbank
    - SQL: Structured Query language
    - Pearl und PHP: Skriptsprache


### Verbindung zwischen Server und Kommandozeilentool herstellen



```bash
C:\pfad1\to\pfad2
```

Wechseln Sie in das verzeichnis 
``` bash 
C:\xampp\mysql\bin
```
### Paramter die zu beachten sind 

- -u (User/Benutzername), Standard: ODBC
- -p (Passwort), Standard: leer
- -h (Host/Serveradresse), Standard: localhost
- -D (Datenbank), Standard: leer
- mysql --help, gibt die vollständige Kommandoliste aus


### 3 Möglichkeiten sich mit den Server zu verbinden

1. Benutzer und Passwort werden sofort übergeben. Nachteil: PW wird eingeblendet

```bash
mysql -ubeispiel_user -pbeispiel_pass -Dphpsql
```

2. Ähnliche Prozedur wie bei dem ersten Befehl, jedoch wird das Pw ausgeblendet. 

```bash
mysql -ubeispiel_user -p 
```
3. Der Client verbindet sich mit einem Server im Internet

```bash
mysql --h=mysql.server.de -u= phpmyadmin_user -p
```

## Ergebniss
Statt der Lokale Pfad steht der MySql Pfad zum Server auf der Kommandozeile
```bash
mysql\
```