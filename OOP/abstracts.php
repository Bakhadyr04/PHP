<?php

abstract class HumanAbstract
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getGreetings(): string;
    abstract public function getMyNameIs(): string;

    public function introduceYourself(): string
    {
        return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
    }
}
//наследование Human
class RussianHuman extends HumanAbstract
{
    //приветствие
    public function getGreetings(): string
    {
        return "Привет";
    }
    //имя
    public function getMyNameIs(): string
    {
        return "Меня зовут";
    }
}
//наследование Human
class EnglishHuman extends HumanAbstract
{
    //приветствие
    public function getGreetings(): string
    {
        return "Hello";
    }
    //имя
    public function getMyNameIs(): string
    {
        return "My name is";
    }
}
//создание объектов
$russian_human = new RussianHuman("Бахадыр");
$english_human = new EnglishHuman("Bakhadyr");
//знакомство
echo $russian_human->introduceYourself() ;
echo '<br>';
echo $english_human->introduceYourself() ;

?>