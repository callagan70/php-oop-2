<?php

class Food{
    public $nameFood;
    public $descrizioneFood;
    public $priceFood;
    public $starFood;
    public $valutazioneFood;

    public function __construct ($_nameFood, $_descrizioneFood, $_priceFood){
        $this -> setName($_nameFood);
        $this -> setDescrizione($_descrizioneFood);
        $this -> setPrice($_priceFood);
        $this -> setStar();
        $this -> setValutazione();
      }

//------------------------------- Star
  public function setStar(){
    $this -> starFood = rand(1, 5);
    return $this;
  }

  public function getStar(){
    return $this -> starFood;
  }
//------------------------------- Name
     public function setName($_nameFood){
         $this -> nameFood = $_nameFood;
       return $this;
     }

     public function getName(){
         return $this -> nameFood;
       }
//------------------------------- Description
       public function setDescrizione($_descrizioneFood){
         $this -> descrizioneFood = $_descrizioneFood;
       return $this;
     }

     public function getDescrizione(){
         return $this -> descrizioneFood;
       }
//------------------------------- Price
       public function setPrice($_priceFood){
         $this -> priceFood = $_priceFood;
       return $this;
     }

     public function getPrice(){
         return $this -> priceFood;
       }
//------------------------------- Valutazione

     public function setValutazione(){
         if($this -> starFood == 1){
           $this -> valutazioneFood = "Mediocre";
         }elseif ($this -> starFood == 2){
           $this -> valutazioneFood = "Media";
         }elseif($this -> starFood == 3){
           $this -> valutazioneFood = "Buona";
         }elseif($this -> starFood == 4){
           $this -> valutazioneFood = "Ottima";
         }else{
           $this -> valutazioneFood = "Eccellente";
         }

        return $this;
     }

    public function getValutazione(){
      return $this -> valutazioneFood;
    }

}





















?>