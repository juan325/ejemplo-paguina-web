<HTML>
	<HEAD>
		<TITLE>catalogo</TITLE>
	</HEAD>
	<BODY>
		<?php
			$sex=$_POST['radsex'];
			$Nombre=$_POST['txtNombre'];
			$Evento=$_POST['cmbEvento'];
			$Cel=$_POST['txtCel'];
			echo "<H2>datos</H2>";
			echo "nombre: ".$Nombre;
			echo "<br>";
			echo "sexo: ";
			if ($sex=="M") {
				
				echo "Masculino";
				
			}else if ($sex=="F"){
			
				echo "Femenino";
			
			}
			echo "<br>";
			echo "Evento a participar: ";
			switch ($Evento) {
				case "5-09":
					echo "dia internacional de la mujer indigena";
					break;
				case "14-08":
					echo "Estudios nahuat pipil";
					break;
				case "14-03":
					echo "Recuperando nuestra identidad";
					break;
			}
			echo "<br>";
			echo "numero de telefono: ".$Cel;
		?>
		
	</BODY>
</HTML>