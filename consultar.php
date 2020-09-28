<?php
	
	$conexion=mysqli_connect('localhost','root','','examen');
	$sql="SELECT * from usuario";
	$result=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($result)){
		echo '
		<tr>
		<td>'.$mostrar['Email'].'</td>
		<td>'.$mostrar['Contraseña'].'</td>
		<td>'.$mostrar['AñoNacimiento'].'</td>
		</tr>';
	}
	


?>