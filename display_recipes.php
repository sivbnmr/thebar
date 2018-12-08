<?php
	foreach ($Recettes as $recette ) {
		echo "<a href = 'index.php?p=recipe&cocktail=".$recette["titre"]."'>".$recette["titre"]."</a> <br>";
	}



?>
