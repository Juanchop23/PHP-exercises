<?php
$monto = $_POST['monto'];

$años = $_POST['tiempo'];

$aporteUsuario = $monto * 0.30;

$aporteBanco = $monto * 0.70;

$impuesto = $aporteBanco * 0.10;

echo "<br/> Usted debe aportar: $" . $aporteUsuario . " en total";
echo "<br/> El banco le dará: $" . $aporteBanco . " en total";
echo "<br/> El impuesto será de: $" . $impuesto . " mensual, teniendo en cuenta que es del 10%";
