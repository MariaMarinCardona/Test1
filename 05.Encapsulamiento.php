<?php	

class Usuario {
	
	private $nombre;
	private $genero;

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	public function getGenero() {
		return $this->genero;
	}

	public function setGenero($genero) {
		if ($genero != 'M' and $genero != 'F') {
		throw new Exception("El genero debe ser M o F...");
		}else {
			$this->genero = $genero;
		}
	}

    

}

$usu1 = new Usuario;
$usu1->setNombre('Jhon');
//$usu1->nombre = "Carmen"; //Error
$usu1->setGenero('M');
echo "Nombre:".$usu1->getNombre();
echo "\nGenero:".$usu1->getGenero(); 

$usu1 = new Usuario;
$usu1->setNombre('AnaLu');
//$usu1->nombre = "Carmen"; //Error
$usu1->setGenero('F');
echo "\n\nNombre:".$usu1->getNombre();
echo "\nGenero:".$usu1->getGenero(); 
