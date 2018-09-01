<?php

abstract class Fruta {
	protected $nombre;
	protected $color;
	protected $precio;

	public function __construct($n, $c, $p){
		$this->nombre = $n;
		$this->color = $c;
		$this->precio = $p;
	}

	abstract public function getInfo();
}


class Manzana extends Fruta {
	public function getInfo(){
		return "\nNombre: ".$this->nombre."\n
				  Color: ".$this->color."\n
				  Precio: ".$this->precio;
	}

}

class Maracuya extends Fruta {
	public function getInfo(){
		return "\nNombre: ".$this->nombre."\n
				  Color: ".$this->color."\n
				  Precio: ".$this->precio;
	}
}

// $fruta1 = new Fruta; // Error: Las clases abstractas no se pueden instanciar;

$fruta1 = new Manzana('Manzana Granny Smith', 'Verde', '2200' );
echo $fruta1-> getInfo();

$fruta2 = new Maracuya('Maracuya Fruta de la Pasión', 'Verde', '3200' );
echo $fruta2-> getInfo();

?>