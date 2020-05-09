<?php
/* Essencials */
ini_set('display_errors', 0 ); error_reporting(0);
$anoActual = date('Y');
/* Essencials */

/* Angola */
$WebSiteAngola = 'https://www.worldometers.info/coronavirus/country/angola/';   
$DOMDocument = new DOMDocument( '1.0', 'utf-8' );
$DOMDocument->preserveWhiteSpace = false;
@$DOMDocument->loadHTML( file_get_contents( $WebSiteAngola) );

$updateAngola = utf8_decode( $DOMDocument->getElementsByTagName( 'div' )->item(12)->nodeValue );
$casesAngola = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(4)->nodeValue );
$deathsAngola = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(5)->nodeValue );
$recoveredAngola = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(6)->nodeValue ); 
$activeCasesAngola = (float) $casesAngola - ((float) $deathsAngola + (float) $recoveredAngola);
/* Angola */


/* world */
$WebSiteWorld = 'https://www.worldometers.info/coronavirus/';   
$DOMDocument = new DOMDocument( '1.0', 'utf-8' );
$DOMDocument->preserveWhiteSpace = false;
@$DOMDocument->loadHTML( file_get_contents( $WebSiteWorld) );

$casesWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(4)->nodeValue );
$deathsWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(5)->nodeValue );
$recoveredWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(6)->nodeValue ); 
$activeCasesWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'div' )->item(29)->nodeValue );


/* North America */
$casesNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(1)->nodeValue );
$deathsNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(3)->nodeValue );
$recoveredNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(5)->nodeValue ); 
$activeCasesNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(6)->nodeValue );
/* North America */


/* Europe */
$casesEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(14)->nodeValue );
$deathsEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(16)->nodeValue );
$recoveredEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(18)->nodeValue ); 
$activeCasesEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(19)->nodeValue );
/* Europe */


/* Asia */
$casesAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(27)->nodeValue );
$deathsAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(29)->nodeValue );
$recoveredAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(31)->nodeValue ); 
$activeCasesAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(32)->nodeValue );
/* Asia */


/* South America */
$casesSouthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(40)->nodeValue );
$deathsSouthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(42)->nodeValue );
$recoveredSouthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(44)->nodeValue ); 
$activeCasesNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(45)->nodeValue );
/* South America */


/* Africa */
$casesAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(53)->nodeValue );
$deathsAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(55)->nodeValue );
$recoveredAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(57)->nodeValue ); 
$activeCasesAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(58)->nodeValue );
/* Africa */


/* Oceania */
$casesOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(66)->nodeValue );
$deathsOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(68)->nodeValue );
$recoveredOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(70)->nodeValue ); 
$activeCasesOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(71)->nodeValue );
/* Oceania */

/* World */
