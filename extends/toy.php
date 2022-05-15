<?php

class Toys{
    public $name;
    public $descrizione;
    public $price;
    public $star;
    public $valutazione;

    public function __construct ($_name, $_descrizione, $_price){
        $this -> setName($_name);
        $this -> setDescrizione($_descrizione);
        $this -> setPrice($_price);
        $this -> setStar();
        $this -> setValutazione();
      }

      //------------------------------- Star
  public function setStar(){
    $this -> star = rand(1, 5);
    return $this;
  }

  public function getStar(){
    return $this -> star;
  }
//------------------------------- Name
     public function setName($_name){
         $this -> name = $_name;
       return $this;
     }

     public function getName(){
         return $this -> name;
       }
//------------------------------- Description
       public function setDescrizione($_descrizione){
         $this -> descrizione = $_descrizione;
       return $this;
     }

     public function getDescrizione(){
         return $this -> descrizione;
       }
//------------------------------- Price
       public function setPrice($_price){
         $this -> price = $_price;
       return $this;
     }

     public function getPrice(){
         return $this -> price;
       }
//------------------------------- Valutazione

     public function setValutazione(){
         if($this -> star == 1){
           $this -> valutazione = "Mediocre";
         }elseif ($this -> star == 2){
           $this -> valutazione = "Media";
         }elseif($this -> star == 3){
           $this -> valutazione = "Buona";
         }elseif($this -> star == 4){
           $this -> valutazione = "Ottima";
         }else{
           $this -> valutazione = "Eccellente";
         }

        return $this;
     }

    public function getValutazione(){
      return $this -> valutazione;
    }

}





















?>