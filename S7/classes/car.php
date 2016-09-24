<?php
    class Car{
        public $make;
        public $model;
        public $color;
        
        public function start(){
            echo 'Car Starting ...'.'<br/>';
        }

    }


    class CarX{
        private $make;
        private $model;
        private $color;
        
        public function start(){
            echo 'Car Starting ...'.'<br/>';
        }
        
        public function getMake (){
            return $this->make;
        }

        public function setMake ($make){
            $this->make = $make;
        }

        public function getModel (){
            return $this->model;
        }
        public function setModel ($model){
            $this->model = $model;
        }
        public function getColor(){
            return $this->color;
        }
        public function setColor($color){
            $this->color = $color;
        }
    }
     class CarEx{
        private $make;
        private $model;
        private $color;

        public function __construct($make, $model, $color){
            $this->make = $make;
            $this->model = $model;
            $this->color = $color;
        }

        public function echoMe(){
            echo '<br/> Make: '.$this->make;
            echo '<br/> Model: '.$this->model;
            echo '<br/> Color: '.$this->color;
        }
     }
?>