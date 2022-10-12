<?php

echo rand(40,45);

$a = 5;
$b = 5;

$sonuc = ($a<=>$b);

if($sonuc == 0)
{
	echo "degerler esit";
}
else if ($sonuc == 1) 
{
  echo "A>B";
}
else if($sonuc==-1)
{
	echo "B>A";
}

switch($sonuc)
{
	case 0:
		echo "degerler esit";
		break;
	case 1:
		echo "A>B";
		break;
	case -1:
		echo "B>A";
		break;
	default:
		echo "gecersiz deger"; 
	break;
}


$a = false;
$b = true;

if(!$a && $b)
{
	echo "+";
}
else
{
	echo "-";
}


 aylar = array("ocak", "subat", "mart");
 print_r($aylar);
 var_dump($aylar);
 echo count($aylar);
 echo $aylar[1];

 $ogrenciler=[

"202151502106" => "Ahmet Berkay Zan",
"202151502048" => "Aihan Dalgic",
"202151502147" => "Arzu Cakr",
"202151502159" => "Esmail Sarwari"

 ];

 echo $ogrenciler[0];
 

$sehirListesi =[
	"ankara",
	"bursa",
	"kocaeli",
	"gebze",
];

$indis = count($sehirListesi)-1;



for($i = 0; $i < count($sehirListesi); $i++)
{
	echo $sehirListesi[$i];
	echo "<br />";
	
}
echo "<hr/>";*/

$i = 0;

while ( $i < count($sehirListesi))
{

	echo $sehirListesi[$i];
	$i++;
	echo "<br />";

}

?>