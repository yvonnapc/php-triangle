<?php
    class Triangle
    {
      private $side1;
      private $side2;
      private $side3;

      function __construct($sideOne, $sideTwo, $sideThree)
      {
        $this->side1 = $sideOne;
        $this->side2 = $sideTwo;
        $this->side3 = $sideThree;
      }

      function getSide1()
      {
        return $this->side1;
      }

      function getSide2()
      {
        return $this->side2;
      }
      function getSide3()
      {
        return $this->side3;
      }

      function setSide1($new_Side1)
      {
        $this->side1 = $new_Side1;
      }

      function setSide2($new_Side2)
      {
        $this->side2 = $new_Side2;
      }

      function setSide3($new_Side3)
      {
        $this->side3 = $new_Side3;
      }

      function triangleType()
      {
        if ($this->side1 === $this->side2 && $this->side2 === $this->side3){
          return "equilateral";
        }
        elseif (($this->side1 === $this->side2) && !($this->side1 === $this->side3) || ($this->side2 === $this->side3) && !($this->side1 === $this->side3) || ($this->side1 === $this->side3) && !($this->side1 === $this->side2))
        {
          return "isoceles";
        }
        else {
          return "scalene";
        }
      }
  }

 $newTriangle = new Triangle($_GET['sidea'], $_GET['sideb'], $_GET['sidec']);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Triangle</title>
   </head>
   <body>
      <?php
      $show_side1 = $newTriangle->getSide1();
      $show_side2 = $newTriangle->getSide2();
      $show_side3 = $newTriangle->getSide3();
      $triangle_type = $newTriangle->triangleType();
        if ((($show_side1) < ($show_side2 + $show_side3)) &&(($show_side2) < ($show_side1 + $show_side3)) && (($show_side3) < ($show_side2 + $show_side1))){

          echo "<p> If your sides are $show_side1 , $show_side2, $show_side3, you have a $triangle_type triangle</p>";
        }
        else {
          echo "<p> If your sides are $show_side1 , $show_side2, $show_side3, you DON'T have a triangle</p>";
        }

      ?>
   </body>
 </html>
