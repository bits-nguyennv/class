<?php
class calculation {
        public $a,$b;
        function  __construct ($a,$b){
         $this->a = $a;
         $this->b = $b;
        }
        function  subtract (){
            return $this->a - $this->b;
        }
        function  add (){
            return $this->a + $this->b;
        }
        function divide (){
            return $this->a / $this->b;
        }
        function multiply (){
            return $this->a * $this->b;
        }
        }
        $problem = new calculation (20,10);
        echo $problem->subtract();
        echo "<br>";
        echo $problem->add();
        echo "<br>";
        echo $problem->multiply();
        echo "<br>";
        echo $problem->divide();
        echo "<br>";



class Figure {
        public $a;
        function  __construct ($a){
            $this->a = $a;
        }  
        function P (){
            return $this->a* 4;
        }
        function S () {
            return $this->a * $this->a;
        }
        }
        $square = new Figure (5);
        echo $square -> P ();
        echo "<br>";
        echo $square -> S ();
        echo "<br>";


class threeedges {
        public $a,$b,$c,$h;
        function __construct ($a,$b,$c,$h) {
         $this->a = $a;
         $this->b = $b;
         $this->c = $c;
         $this->h = $h; 
        }
        function p () {
            return $this->a + $this->b + $this->c;
        }
        function s () {
            return $this->a *0.5 * $this->h ;
        }
        }
        $triangle = new threeedges (2,3,4,1);
        echo $triangle -> p ();
        echo "<br>";
        echo $triangle -> s ();
        echo "<br>";

?>