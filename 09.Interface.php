<?php

interface Animal {
	public function comer();
	public function correr();
	}

class Perro implements Animal {
	private $nombre;

	public function __construct($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function ladrar() {
		return "Ladrar...";
	}

	public function comer() {
		return "comer...";
	}

	public function correr() {
		return "correr...";
	}
}

class Gato implements Animal {
	private $nombre;

	public function __construct($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function Maullar() {
		return "Maullar...";
	}

	public function comer() {
		return "comer...";
	}

	public function correr() {
		return "correr...";
	}

}

$perro1 = new Perro('Fiona');
echo "\n\n".$perro1->getNombre();
echo "\n".$perro1->correr();
echo "\n".$perro1->comer();
echo "\n".$perro1->ladrar();

$gato1 = new Gato('Lola');
echo "\n\n".$gato1->getNombre();
echo "\n".$gato1->correr();
echo "\n".$gato1->comer();
echo "\n".$gato1->Maullar();
?>