<?php

require './funcao.php';

$chamando = new Execucao();
class Execucao {
	
	public function multiploFizz(){
		$this->numero ('Fizz', FizzBuzz(3));
	} 

	public function multiploBuzz(){
		$this->numero('Buzz', FizzBuzz(5));
	}

	public function multiploFizzBuzz(){
		$this->numero('FizzBuzz', FizzBuzz(3 && 5));
	}

	public function multiploNenhum(){
		$this->numero(1, FizzBuzz(1));
	}
}

?>