<?php
	$abroncs_db = $_POST["abroncs_db"];
	$olaj_db = $_POST["olaj_db"];
    $gyertya_db = $_POST["gyertya_db"];
	$hol_hallott_rolunk = $_POST["hol_hallott_rolunk"];
?>
<html>
<head>
  <title>Bob autóalkatrészek - Rendelési eredmények</title>
</head>
<body>
<h1>Bob autóalkatrészek</h1>
<h2>Rendelési eredmények</h2>
<?php
  echo '<p>Rendelés feldolgozásának időpontja: ';
  echo date('H:i, jS F');
  echo '</p>';

  echo '<p>Rendelése az alábbi: </p>';
  echo $abroncs_db.' gumiabroncs<br />';
  echo $olaj_db.' flakon olaj<br />';
 echo $gyertya_db.' gyújtógyertya<br />';

  $osszmennyiseg = 0;
  $osszmennyiseg = $abroncs_db + $olaj_db + $gyertya_db;
  echo "Rendelt termékek száma: ".$osszmennyiseg."<br />";

  $vegosszeg = 0.00;

  define('ABRONCSAR', 100);
  define('OLAJAR', 10);
  define('GYERTYAAR', 4);

  $vegosszeg = $abroncs_db * ABRONCSAR
             + $olaj_db * OLAJAR
             + $gyertya_db * GYERTYAAR;

  echo "Részösszeg: $".number_format($vegosszeg,2)."<br />";

  $adokulcs = 0.10; // a helyi forgalmi adó 10%
  $vegosszeg = $vegosszeg * (1 + $adokulcs);
  echo "Végösszeg ÁFA-val: $".number_format($vegosszeg,2)."<br />";

?>
</body>
</html>

