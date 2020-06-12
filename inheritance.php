<?php


abstract class Shape {
 
 
 protected $color;

 public function __construct($color = 'Red'){
   $this->color = $color;
 }

 abstract public function getArea();

  public function getColor(){
  	return $this->color;
  }

}

class Square extends Shape {

	protected $length;

	public function __construct($length, $color){
		parent :: __construct($color);
        $this->length = $length;

	}

	public function getArea(){

	 return pow($this->length, 2);	
	}

}

class Circle extends Shape {
  protected $radius;

  public function __construct($radius, $color){
  	parent :: __construct($color);
    $this->radius = $radius;

  }
  public function getArea(){

  	return number_format((pi() *pow($this->radius, 2)), 2);

  }

}


$square = new Square(16, 'Black');
echo "<br>Square Area : " . $square->getArea();
echo "<br>Square color : " . $square->getColor();



$cir = new Circle(5, "Pink");
echo "<br>Circle Area : " . $cir->getArea();
echo "<br>Circle Color : " . $cir->getColor();