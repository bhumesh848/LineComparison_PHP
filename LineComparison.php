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
      /**
     * Function to check the equality of two lengths
     * Passing length1 and length2 as parameters
     * Prints whether lengths are equal, greater or smaller
     */
    function checkEquality($length1, $length2)
    {
        if ($length1 == $length2) {
            echo "\nBoth have Equal Length";
        } elseif ($length1 > $length2) {
            echo "\nLength1 is Greater than Length2\n";
        } else {
            echo "\nLength2 is Greater than Length1\n";
        }
    }

    function compareLengths($length1, $length2)
    {
        $length1 = (string) $length1;
        $length2 = (string) $length2;
        $compare = strcmp($length1, $length2);
        if ($compare == 0) {
            echo "\nBoth have Equal Length\n";
        } elseif ($compare > 0) {
            echo "\nLength1 is Greater than Length2\n";
        } else {
            echo "\nLength1 is Smaller than Length2\n";
        }
    }
    }
     $lineComparison = new LineComparison();
     $lineComparison->welcomeMessage();
     $length1 = $lineComparison->calculateLength();
     echo "\nLength 1:" . $length1."\n";
     $length2 = $lineComparison->calculateLength();
     echo "\nLength 2:" . $length2;
     //$lineComparison->checkEquality($length1, $length2);
     $lineComparison->compareLengths($length1,$length2);

     
?>