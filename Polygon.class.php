<?php


class Polygon extends Shape
{

  public $x1;
  public $y1;
  public $x2;
  public $y2;
  public $x3;
  public $y3;


  public function __construct(){

    parent::__construct(); // paima tevinio elemento construktoriu
    $this->x1 = $this->location->x;
    $this->y1 = $this->location->y;
    $this->x2 = 0;
    $this->y2 = 200;
    $this->x3 = 200;
    $this->y3 = 200;

  }


  public function setPlace($x1, $y1, $x2, $y2, $x3, $y3)
  {
    $this->x1 = $x1;
    $this->y1 = $y1;
    $this->x2 = $x2;
    $this->y2 = $y2;
    $this->x3 = $x3;
    $this->y3 = $y3;
  }



  public function draw(SvgRenderer $renderer)
  {
    $renderer->drawPoligon($this->x1,
                            $this->y1,
                            $this->x2,
                            $this->y2,
                            $this->x3,
                            $this->y3,
                            $this->color,
                            $this->opacity);

  }
}





 ?>
