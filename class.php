<?php

class maytinh {
    public $a,$b;
    
    function  __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
        function tru(){
            return $this->a - $this->b;
        }
        function cong(){
            return $this->a + $this->b;
        }
        function chia(){
            return $this->a / $this->b;
        }
        function nhan(){
            return $this->a * $this->b;
        }
}
   $mơi = new maytinh(20,10);
    echo $mơi->tru();
    echo "<br>";
    echo $mơi->cong();
    echo "<br>";
    echo $mơi->chia();
    echo "<br>";
    echo $mơi->nhan();
    echo "<br>";



class hinhvuong {
        public $a;
        function  __construct($a){
            $this->a = $a;
        }  
        function P (){
            return $this->a* 4;
        }
        function S () {
            return $this->a * $this->a;
        }
    }
    $vuong = new hinhvuong(5);
    echo $vuong -> P ();
    echo "<br>";
    echo $vuong -> S ();
    echo "<br>";


class tamgiac {
public $a,$b,$c,$h;
function __construct($a,$b,$c,$h) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
    $this->h = $h;
}
function p() {
    return $this->a + $this->b + $this->c;
}
function s() {
    return $this->a *0.5 * $this->h ;
}
}
$hinh = new tamgiac(2,3,4,1);
echo $hinh -> p ();
echo "<br>";
echo $hinh -> s ();
echo "<br>";
?>