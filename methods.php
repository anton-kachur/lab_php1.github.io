<?php

class SomeClass {
    private $text;
    private $meta;

    public function __construct($text, $meta) {
        $this->text = $text;
        $this->meta = $meta;
    }

    public function __destruct()
    {
        echo "<br>Destructing...";
    }

    protected function nothing() {
        echo "You can't do it";
    }

    public function yesthing() {
        echo "You can do it";
    }

    public function __call($method, $args)
    {
        if ($method == 'nothing') {
            $this->yesthing();
        }

        return false;
    }

    public function __get($data) {
        if ($data == 'text') {
            return $this->text;
        }

        return false;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __toString() {
        return 'text: ' . $this->text;
    }

    public function  __clone() {
       echo "It works!<br>";
    }

    public function output_all() {
        echo $this->text.", ";
        print_r($this->meta);
    }
}

$obj = new SomeClass(123, array('hello', 'world'));

echo "Object data: ";
$obj->output_all();

echo "<br>__call method: ";
$obj->nothing();

echo "<br>__get(): " . $obj->text;
$obj->text = 777;
echo "<br>__set(): " . $obj->text;

echo "<br>__toString(): ", $obj;

echo "<br>__invoke(): ";

class CallableClass {
    public function __invoke($o)
    {
        var_dump($o);
    }
}

$obj0 = new CallableClass;
$obj0(3);
var_dump(is_callable($obj0));

echo "<br>__clone(): ";
$obj1 = clone $obj;

echo "1st object: ";
$obj->output_all();
echo "<br>2nd object: ";
$obj1->output_all();