<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

class backpack {
    // properties
    public $color;
    public $size;
    public $items;
    public $open;


    function __construct($color, $size) {
        $this->color = $color;
        $this->size = $size;
        $this->items = [];
        $this->open = false;


    }




    //methods
    function openBag() {
        $this->open = true;
        return 'open';
        

    }

    function closeBag() {
        $this->open = false;
        return 'closed';
    }

    function putin($item) {
        if ($this->open == true) {
            array_push($this->items, $item);
            print_r($this->items);
            
        
        } else {
            return 'Bag must be open';
        } 

    }

    function takeout() {
        if ($this->open == true) {
            array_pop($this->items);
            print_r($this->items);
            
        
        } else {
            return 'Bag must be open';
        } 

    }






}

$backpack1 = new backpack('blue', 'small');
$backpack2 = new backpack('red', 'medium');
$backpack3 = new backpack('green', 'large');
print_r($backpack1);
echo '<br>';

echo $backpack1->openBag();
echo $backpack1->putin('lunch');
echo $backpack1->putin('jacket');
echo $backpack1->closeBag();
echo $backpack1->openBag();
echo $backpack1->takeout('jacket');
echo $backpack1->closeBag();






?>


    
</body>
</html>