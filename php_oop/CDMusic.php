<?php
require_once('Product.php');
    class CDMusic extends Product
    {
        public $artist;
        public $genre;

        function __construct($name, $price, $discount)
        {
            parent::__construct($name, $price, $discount);
        }

        function getArtist()
        {
            return $this->artist;
        }

        function setArtist($artist)
        {
            $this->artist = $artist;
            return $artist;
        }

        function getGenre()
        {
            return $this->genre;
        }

        function setGenre($genre)
        {
            $this->genre = $genre;
            return $genre;
        }

        function setPrice ($price) {
            parent::setPrice($price = $price + (0.10*$price));
        }
    
        function setDiscount ($discount) {
            parent::setDiscount($discount + 0);
        } 
    }


?>