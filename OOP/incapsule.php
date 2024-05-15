<?php

class Cat{
    private $name;
    private $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHello(): string
    {
        return "Мяу! Меня зовут " . $this->name . ". Я " . $this->getColor() . " цвета.";
    }

    private function getColor(): string
    {
        return $this->color;
    }

}

$cat1 = new Cat("Вискас", "серого");
$cat2 = new Cat("Китекет", "чёрного");

echo $cat1->sayHello() ;
echo "<br>";
echo $cat2->sayHello() ;

?>