<?php

/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class for Line Comparison Computation Problem
 */

 class LineComparison
 {
     public $x1;
     public $x2;
     public $y1;
     public $y2;

     function welcomeMessage(){
         echo "Welcome to line Comparison Computation Problem\n";
     }
     
    /**
     * Function to get User input for calculating length
     * values for x1, y1,x2,y2 are taken
     */
    function userInput()
    {
        $this->x1 = readline("Enter the Value of X1 : ");
        $this->y1 = readline("Enter the Value of Y1 : ");
        $this->x2 = readline("Enter the Value of X2 : ");
        $this->y2 = readline("Enter the Value of Y2 : ");
    }
     /**
     * Function to Calculate length of the points
     * using given formula
     */
    function calculateLength(){
        $this->userInput();
        $length = sqrt(($this->x2-$this->x1)^2 + ($this->y2-$this->y1)^2);
        return $length;
    }
     }
     $lineComparison = new LineComparison();
     $lineComparison->welcomeMessage();
    echo  $lineComparison->calculateLength();
    
?>