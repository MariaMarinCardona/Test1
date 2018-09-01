<?php

 Class Operacion {

 	protected $num1;
	protected $num2;

	public function __construct($num1, $num2) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

}

class suma extends Operacion {
	public function getResultado(){
		return $this->num1 + $this->num2;
	}

}

class resta extends Operacion {
	public function getResultado(){
		return $this->num1 - $this->num2;
	}

}

class multiplicacion extends Operacion {
	public function getResultado(){
		return $this->num1 * $this->num2;
	}

}

class division extends Operacion {
	public function getResultado(){
		return $this->num1 / $this->num2;
	}

}


$suma = new Suma(6, 18);
echo "\n\nEl resultado de la suma es: ".$suma->getResultado();

$resta = new Resta(6, 18);
echo "\n\nEl resultado de la resta es: ".$resta->getResultado();

$multiplicacion = new Multiplicacion(6, 18);
echo "\n\nEl resultado de la multiplicación es: ".$multiplicacion->getResultado();

$division = new Division(6, 18);
echo "\n\nEl resultado de la division es: ".$division->getResultado();

echo "\n\n"
?>