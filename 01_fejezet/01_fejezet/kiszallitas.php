<html>
<body>
<table border="0" cellpadding="3">
<tr>
  <td bgcolor="#CCCCCC" align="center">Távolság</td>
  <td bgcolor="#CCCCCC" align="center">Költség</td>
</tr>
<?php
$tavolsag = 50;
while ($tavolsag <= 250 )
{
  echo "<tr>\n  <td align = 'right'>$tavolsag</td>\n";
  echo "  <td align = 'right'>". $tavolsag / 10 ."</td>\n</tr>\n";
  $tavolsag += 50;
}
?>
</table>
</body>
</html>

