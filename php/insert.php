<?
$code = $_POST["user_code"];
$name =  $_POST["user_name"];
$surname =  $_POST["user_surname"];
$email =  $_POST["user_email"];
$pass =  $_POST["user_password"];
$job =  $_POST["user_job"];
$account =  $_POST["account"];
/*require("connection.php");
$sql = "INSERT INTO users (id,code,name,surnames,email,pass,career,user) VALUES (' ','$code', '$name', '$surname', '$email', '$pass', '$job', '$account')";
mysqli_query($connection,$sql);
echo 1;*/


// Datos de la base de datos
  $servidor = "localhost";
  $usuario = "foranerp_user";
  $pass = "m?L$GPQ5!r[Y"
  $basededatos = "foranerp_MAE"

	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM alumnos";
  $sql = "INSERT INTO users (id,code,name,surnames,email,pass,career,user) VALUES (' ','$code', '$name', '$surname', '$email', '$pass', '$job', '$account')";
	$resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Nombre</th>";
	echo "<th>Edad</th>";
	echo "</tr>";

	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td>";
		echo "</tr>";
	}

	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );

?>
