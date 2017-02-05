<?php
include 'C:\xampp\htdocs\php\cartoDBProxy.php';
//			^CHANGE THIS TO THE PATH TO YOUR cartodbProxy.php
$q = "INSERT INTO hoods" . $_POST['ext'] . " (the_geom, city, description, name,city_yrs,nbrhd_yrs,flag,loved) VALUES (ST_SetSRID(ST_GeomFromGeoJSON('";
if ( $_POST['ext'] != "_point" ){
  $q .= '{"type":"MultiPolygon","coordinates":[[[' . $_POST['coords'] . "]]]}'";
} else {
  $q .= '{"type":"Point","coordinates":' . $_POST['coords'] . "}'";
}
$q .= "),4326),'". $_POST['city'] ."','" . $_POST['description'] . "','" . $_POST['name'] . "','" . $_POST['cityYears'] . "','" . $_POST['hoodYears'] . "','false','0')";
$return = goProxy($q);
echo $return;
?>