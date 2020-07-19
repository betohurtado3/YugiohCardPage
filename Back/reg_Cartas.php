<?
require "conecta.php";
///Recibe Variables

$file_name = $_FILES['archivo']['name'];	//Nombre real del archivo
$file_tmp  = $_FILES['archivo']['tmp_name'];//Nombre temporal del archivo
$cadena    = explode(".", $file_name);		//Separa el nombre para obtener la extension
$ext       = $cadena[1];					//Extension
$dir       = "../images/";					//carpeta donde se guardan los archivos
$file_enc  = md5_file($file_tmp);			//Nombre del archivo encriptado


$nombre      = $_POST['nombre'];
$tipo        = $_POST['tipo'];
$atributo    = $_POST['atributo'];
$nivel       = $_POST['nivel'];
$icono       = $_POST['icono'];
$descripcion = $_POST['descripcion'];
$atk         = $_POST['Atk'];
$def         = $_POST['Def'];

$fileName1  = "$file_enc.$ext";	

//Inserta en DB
$sql = "INSERT INTO Cartas VALUES (0,'$nombre','$tipo','$atributo','$nivel','$icono','$descripcion','$atk','$def','$fileName1','$file_name')";

$res = mysqli_query($con, $sql);

if ($file_name != '') {
	$fileName1  = "$file_enc.$ext";	
	@copy($file_tmp, $dir.$fileName1);	
}

if ($res)
    echo 1;
else 
    echo 0;

?>