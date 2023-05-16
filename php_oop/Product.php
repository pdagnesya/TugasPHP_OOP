<?php
    class Product
    {
        public $name;
        public $price;
        public $discount;
    
        function __construct($name, $price, $discount)
        {
            $this->name = $name;
            $this->price = $price;
            $this->discount = $discount;
        }
    
        function getPrice()
        {
            return $this->price;
        }
    
        function setPrice($price)
        {
            $this->price = $price;
            return $price;
        }
    
        function getName()
        {
            return $this->name;
        }
    
        function setName($name)
        {
            $this->name = $name;
            return $name;
        }
    
        function getDiscount()
        {
            return $this->discount;
        }
    
        function setDiscount($discount)
        {
            $this->discount = $discount;
            return $discount;
        }
    
    }

?>