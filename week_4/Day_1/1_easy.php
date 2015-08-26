<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Create a class called "Rectangle".
     * Your class should have a constructor that takes two parameters: a width and height.
     *
     * Add three public functions to your class:
     *   getArea() : Calculate and return the area of the rectangle
     *   getPerimeter() : Calculate and return the perimeter of the rectangle
     *   isSquare() : Return true of the rectangle is a square, false otherwise.
     */

    ///////////////////////////
        $width = 160;
        $height = 75;

    class Rectangle{
        public function __construct($width,$height){
            $this->width=$width;
            $this->height=$height;
        } 
        public function getArea(){
            return $this->width * $this->height;
        }
        public function getPerimeter(){
            return $this->width+$this->width+$this->height+$this->height;
        } 
        public function isSquare(){
            if ($this->height == $this->width){
                return true;
            }
        }
        
    }
    ///////////////////////////


    $width = 160;
    $height = 75;

    echo "<h2>With a width of $width and a height of $height...</h2>";

    $r = new Rectangle($width, $height);

    echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';
    echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';

    echo '<p>This rectangle is ';
    if ($r->isSquare()) {
        echo 'also';
    } else {
        echo 'not';
    }
    echo ' a square.</p>';

    ?>

</p>

</body>
</html>