<?php
namespace App\classes;
class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];


    public function index()
    {
//        $this->firstName    = 'Rohim';
//        $this->lastName     = 'Khan';
//        echo "Full name is ".$this->firstName." ".$this->lastName;
        /*
                ======operator=======
            *Arithmetic Operator
                *Binary Operator (+, -, *, /, %)
                *Unary Operator (++, --, (-) )
            *Assignment Operator (=, +=, -=, *=, /=, %=, .=)
            *Conditional Operator (>, >=, <, <=, ==, !=, ===, !==)
            *logical Operator (&&, ||, !)
        */

//                ====== Statement ====
           /*
                * Single Line Statement
                * Conditional Statement
                    * IF
                    * IF ELSE
                    * IF ELSE IF
                    * SWITCH
                * Repeated Statement
                    * FOR
                    * WHILE
                    * DO WHILE
                    * FOREACH
              * Array
            *

            */

        $this->data = [10, 20, 30, 'BITM', 100.200, true];
        //echo $this->data[9];
        foreach ($this->data as $item)
        {
            echo $item;
        }

//        $this->x = 100;
//        do{
//            echo 'Hello World <br/>';
//            $this->x++;
//        } while($this->x < 110);

//            while ($this->x < 110)
//            {
//                echo 'Hello World<br/>';
//                $this->x++;
//            }

//        for ($this->y = 99; $this->y >= 76; $this->y--)
//        {
//            echo $this->y.' ';
//        }

//        switch ($this->x)
//        {
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'Hello BITM';
//        }
//        if ($this->x >100)
//        {
//            echo 'hello world';
//        }
//        elseif ($this->x <100)
//        {
//            echo "Hello BITM";
//        }
//        elseif ($this->x < 150)
//        {
//            echo $this->x;
//        } else {
//            echo 'Good nature';
//        }

//        if ($this->x > 200)
//        {
//            echo '200';
//        } elseif ($this->x <200)
//        {
//            echo $this->x;
//        }


//        if($this->x < 20)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Hello World';
//        }





//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';


//        echo $this->x += $this->y; // $this->x = $this->x + $this->y 30
//        echo '<br/>';
//        echo $this->x -= $this->y; // 10
//        echo '<br/>';
//        echo $this->x *= $this->y; // 200
//        echo '<br/>';
//        echo $this->x /= $this->y; // 10
//        echo '<br/>';
//        echo $this->x %= $this->y; // 10
//        echo '<br/>';
//        echo $this->x .= $this->y; // 1020
//        echo '<br/>';

//        echo $this->x--; // 10
//        echo '<br/>';
//        echo ++$this->x; // 10
//        echo '<br/>';
//        echo $this->x++; // 10
//        echo '<br/>';
//        echo --$this->x; // 10
//        echo '<br/>';
//        echo ++$this->x;// 11

//        echo $this->x + $this->y; // 30
//        echo '<br/>';
//        echo $this->x - $this->y; // - 10
//        echo '<br/>';
//        echo $this->x * $this->y; // 200
//        echo '<br/>';
//        echo $this->x / $this->y; // 0.5
//        echo '<br/>';
//        echo $this->x % $this->y; // 10

    }
}