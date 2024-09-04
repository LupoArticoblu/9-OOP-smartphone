<?php

class Telefono
{
 public $producer;
 public $model;
 public $price;
 public $spec;
 public $img;
 public $discount = 0;

 /**
  * @param String $_producer
  * @param String $_model
  * @param Int $_price
  * @param Spec $_spec
  */
 public function __construct($_producer, $_model, $_price, Spec $_spec = null) {
   $this->producer = $_producer;
   $this->model = $_model;
   $this->price = $_price;
   $this->spec = $_spec;
 }

 public function setImg($_img){
   $this->img = $_img;
 }

 public function getImg(){
   $placeholder = 'https://via.placeholder.com/150';
   return $this->img ?? $placeholder;
 }

 public function setDiscount($_discount){
   $this->discount = $_discount;
 }

 public function getPrice(){
  $finalPrice = $this->price;
   if ($this->discount > 0) {
     $finalPrice -= ($this->price * $this->discount / 100);
   }
   //number_format($number, decimali, separatore decimale, separatore migliaia)
   return number_format($finalPrice, 2, ',', '.');
 }
}