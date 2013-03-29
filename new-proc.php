<?php
print "\e[39m\e[32mWelcome to the Github Version of Hacksave!!!\n\e[36mCreating new proc... Please wait!";

sleep(1.1);

print "\r\e[39mHow long ist the password? Answer: ";

$f = fopen('php://stdin', 'r');
$last_line = false;
$t = '';
$next_line = fgets($f, 1024); // Einlesen der Eingabe
$t = $next_line;

$t = str_replace("\n", "", $t);

if (is_numeric($t)) {
        echo "Lenght '{$t}' accepted.\n";
        
        $long = $t;
        
    } else {
        echo "'{$t}' is not a number!!!\n";
        exit;
    }

print "\nWhats the .hs file for this proc? (Leave Blank for default.hs) Answer: ";

$f = fopen('php://stdin', 'r');
$last_line = false;
$t = '';
$next_line = fgets($f, 1024); // Einlesen der Eingabe
$t = $next_line;

$t = str_replace("\n", "", $t);

if($t == "") {
	print "Using default.hs!\n";
	
	$hs = "default.hs";
	
}
else {
	$file = file_get_contents("./hsfiles/{$t}");
	print "File '{$t}' loaded!\n";
	
	$hs = $t;
}



print "\nWhats the document link to crack? Answer: ";

$f = fopen('php://stdin', 'r');
$last_line = false;
$t = '';
$next_line = fgets($f, 1024); // Einlesen der Eingabe
$t = $next_line;

$t = str_replace("\n", "", $t);

if($t != "") {
	print "Will crack htaccess password of '{$t}'!\n";
	
	$link = $t;
}
else {
	print "Hacksave needs a document link to crack! You cant leave it blank!\n";
	exit;
}


print "\nName for this proc? Answer: ";

$f = fopen('php://stdin', 'r');
$last_line = false;
$t = '';
$next_line = fgets($f, 1024); // Einlesen der Eingabe
$t = $next_line;

$t = str_replace("\n", "", $t);

if($t != "") {
	$name = $t;
	print "Will save this proc as '{$name}'!\n";
}
else {
	print "Every proc needs a name!\n";
	exit;
}

print "\e[34mIs this data correct?\n";
print "\e[35mLenght:" . $long . "\n";
print "\e[35mHS-File:" . $hs . "\n";
print "\e[35mLink:" . $link . "\n";
print "\e[35mProc-name::" . $name . "\n\n";
print "\e[34mIf this is alright, only press Enter now! If not type something else and press Enter! \n";

$f = fopen('php://stdin', 'r');
$last_line = false;
$t = '';
$next_line = fgets($f, 1024); // Einlesen der Eingabe
$t = $next_line;

$t = str_replace("\n", "", $t);

if($t == "") {
	$ok = 1;
	print "Your Proc is saved as '{$name}'!\n\e[39m";
	exit;
}
else {
	print "Restart this script and type your data in again!\n\e[39m";
	exit;
}


















?>
