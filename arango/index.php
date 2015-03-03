<?php
include("functions.php");
//insertamos los ids de la base vieja en la tabla de WP
//$query = "INSERT INTO wp_posts(id_original) SELECT id from notas";
//comenzamos a llenar los campos
//aca ejemplo para la volanta
/*
$query = "UPDATE wp_posts wp, (SELECT id,volanta FROM notas) src 
  SET wp.volanta = src.volanta where wp.id_original=src.id";
$res = $conn->query($query);
	if (!$res) {
   		printf("Errormessage: %s\n", $conn->error);
	}
*/
//limpiamos la volanta de caracteres raros
/*
	$query="SELECT id_original,volanta FROM wp_posts WHERE volanta is not null";
	$res = $conn->query($query);
	if (!$res) {
   		printf("Errormessage: %s\n", $conn->error);
	}
	while ($row = $res -> fetch_assoc()) {
		$nueva_volanta =  cleanNonAsciiCharactersInString($row["volanta"]);
		$query23="UPDATE wp_posts set volanta='".$nueva_volanta."' WHERE id_original=".$row["id_original"];
		$res23 = $conn->query($query23);
		echo $query23."<br/>";
	}
*/
?>
