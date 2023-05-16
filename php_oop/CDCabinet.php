<?php 
require_once('Product.php');
    class CDCabinet extends Product
    {
        public $capacity;
        public $model;

        function __construct($name, $price, $discount)
        {
            parent::__construct($name, $price, $discount);
        }

        function getCapacity()
        {
            return $this->capacity;
        }

        function setCapacity($capacity)
        {
            $this->capacity = $capacity;
            return $capacity;
        }

        function getModel()
        {
            return $this->model;
        }

        function setModel($model)
        {
            $this->model = $model;
            return $model;
        }

        function setPrice ($price) {
            parent::setPrice($price = $price + (0.15*$price));
        }
    
        function setDiscount ($discount) {
            parent::setDiscount($discount = 0);
        }
    }


?>