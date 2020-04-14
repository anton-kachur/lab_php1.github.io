<?php
    $a = "Hello";
    $b = " world";
    $c = 1;

    $$a = " darkness";
    echo "1) Variables dereferencing: \$a = ", $a, ", $\$a = ", $$a, ", \$Hello =", $Hello;

    echo "<br>2) Concatenation: ", $a, " + ", "World = ", $a . " World";

    echo "<br>3) Assignment with concatenation (\$a.=\" world\"): ", "", $a .= " world";

    echo "<br>4) lcfirst() and ucfirst(): ", lcfirst($a), ", ", ucfirst($a);

    echo "<br>5) strtoupper() and strtolower(): ", strtoupper($a), ", ", strtolower($a);

    echo "<br>6) Type conversion (implicit): \"2\" + 3 = " . ("2" + 3);

    echo "<br>7) Type conversion (explicit): (int)\"10\" = ";
    $num = (int)"10";
    echo "$num, gettype(\$num) = " . gettype($num);

    $array1 = array('Live', 'goes', 'on,', 'man');
    $array2 = array('Just', 'let', 'it', 'go');
    echo "<br>8) Implode: ", $array1 = implode(" ", $array1);

    echo "<br>9) Explode: ";
    $array1 = explode(" ", $array1);
    for($i = 0; $i < count($array1); $i++)
        echo "<br>[$i] = " . $array1[$i];

    echo "<br>10) array_combine(): "; print_r(array_combine($array1, $array2));

    echo "<br>10) Identical equality: ",
    "<br>$a === $b: ", boolval($a === $b),
    "<br>\$c = \$c +-0-+ 3: \$c = $c, result: ", $c = $c +-0-+ 3;

    echo "<br>11) Operation with character variables (incrementation): ";

    $n = 'W';
    for($i = 0; $i < 6; $i++)
        echo ++$n . " ";

    echo "<br>12) Arrays: ";
    print_r($arr = array(0 => 'a', 1 => 'b', 2 => 'c'));
    foreach($arr as $key => $value) {
        echo "<br>[$key] = " . $value;
    }

    echo "<br>13) OOP:";

    class Auto {
        var $wheels_num;
        var $speed;
        function __construct ($wheels_num = 4, $speed = 100) {
            $this->wheels_num = $wheels_num;
            $this->speed = $speed;
        }
        function output_all() {
            echo "Wheels: ", $this->wheels_num, ", speed: ", $this->speed;
        }
    }

    class Reliant_Regal extends Auto{
        function __construct() {
            parent::__construct(3, 120);
        }
    }

    $car1 = new Auto(4, 200);
    $car2 = new Reliant_Regal();

    echo "<br>Car1: ", $car1->output_all(),
    "<br>Car2: ", $car2->output_all();

class Singleton {
    private static $instance = null;
    private function __construct() {}
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function test() {
        var_dump($this);
    }
}

$Object = Singleton::getInstance();
echo "<br>14) Singleton pattern: " , $Object -> test(), ", " , Singleton::getInstance() -> test();
// Попытка создать дополнительный экземпляр приведет к ошибке

