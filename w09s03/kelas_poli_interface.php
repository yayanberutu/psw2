<?php
	//sebuah interface bernama Shape
	interface Shape{
		public function calcArea();
	}

	//Sebuah kelas bernama circle yang mengimplementasikan interface shape

	class Circle implements Shape {
		private $radius;

		public function __construct($radius){
			$this->radius = $radius;
		}

		//calcArea calculates the area of circles

		public function calcArea(){
			return $this->radius*$this->radius*pi();
		}

	}

		//Sebuah kelas bernama rectangle yang mengimplementasikan interface Shape

	class Rectangle Implements Shape {
		private $width;
		private $height;

		public function __construct($width, $height){
			$this->width = $width;
			$this->height = $height;
		}
		//calcArea calculates the area of rectangles

		public function calcArea(){
			return $this->width * $this->height;
		}

	}

	//Show Result

	$circ = new Circle(3);
	$rect = new Rectangle(3,4);
	echo $circ->calcArea();

	echo "<br>";
	echo $rect->calcArea();




?>