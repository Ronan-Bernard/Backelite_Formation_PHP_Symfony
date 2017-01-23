<?php
	$a = 1;
	$b = 2;
	If ($a == 1 && $b == 2) {
		Echo "j’ai fait un if qui marche" . "<br/><br/>";
	}

	$tab = array(0, 1, 2, 3);
	Foreach ($tab as $value) {
		Echo $value;
}

echo "<br/><br/>";

For ($i=0; $i<6; $i++) {
	Echo $i;
}

	While ($a < 10) {
		Echo $a++ . "<br/>";
	}

	$b =3;
	Switch ($b) {
		Case 1:
		Case 2:
			Echo "1 ou 2";
		Break;
		Case 3:
		Default:		
			Echo "3 ou autre";
		break;
	}

