<?php

function fizzBuzz($numero){
    if  (($numero % 3 === 0) && ($numero % 5 === 0)) {
        return "FizzBuzz";
    }
    elseif ($numero % 5 === 0) {
        return "Buzz";
    }
    elseif($numero % 3 === 0) {
        return "Fizz";
    }
    else{
       return $numero;
    }
}
for ($a=1; $a<=100; $a++){
    echo"\n".fizzBuzz($a)."\n";
}
?>