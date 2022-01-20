<?php
abstract class Figure
{
    protected string $type;


    protected function setType($type)
    {
        $this -> type = $type;
    }

    protected function getType(): string
    {
        return $this ->type;
    }

    public function getMessage ()
    {
        echo "Фигура: ".$this->getType().", площадь: ".$this->figureArea().", периметр: ".$this->figurePerimeter()."<br>";
    }

    abstract function figureArea(): float;

    abstract function figurePerimeter(): float;
}

class Circle extends Figure
{
    protected float $r;

    public function __construct(float $r)
    {
        $this -> setType('Круг');
        $this -> r = $r;
    }
    public function figurePerimeter(): float
    {
        return round(2*pi()*$this->r, 3);
    }

    public function figureArea(): float
    {
       return round(pi()*$this -> r**2, 3);
    }
}

class Triangle extends Figure
{
    protected float $a;
    protected float $b;
    protected float $c;

    public function __construct(float $a, float $b, float $c)
    {
        $this -> setType('Треугольник');
        $this -> a = $a;
        $this -> b = $b;
        $this -> c = $c;
    }
    public function figurePerimeter(): float
    {
        return round($this -> a + $this -> b + $this -> c, 3);
    }

    public function figureArea(): float
    {
        $p = $this->figurePerimeter() / 2;
        return round( sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c)), 3);
    }
}

class Square extends Figure
{
    protected float $a;

    public function __construct(float $a)
    {
        $this -> setType('Квадрат');
        $this -> a = $a;
    }
    public function figurePerimeter(): float
    {
        return round($this -> a * 4, 3);
    }

    public function figureArea(): float
    {
        return round( $this->a ** 2, 3);
    }
}

$circle = new Circle(10);
$circle -> getMessage();
$triangle = new Triangle(3, 4, 5);
$triangle -> getMessage();
$square = new Square(2);
$square -> getMessage();
