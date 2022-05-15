<?php

class Toys{
    public $nameToys;
    public $descrizioneToys;
    public $priceToys;
    public $starToys;
    public $valutazioneToys;

    public function __construct ($_nameToys, $_descrizioneToys, $_priceToys){
        $this -> setName($_nameToys);
        $this -> setDescrizione($_descrizioneToys);
        $this -> setPrice($_priceToys);
        $this -> setStar();
        $this -> setValutazione();
      }

      //------------------------------- Star
  public function setStar(){
    $this -> starToys = rand(1, 5);
    return $this;
  }

  public function getStar(){
    return $this -> starToys;
  }
//------------------------------- Name
     public function setName($_nameToys){
         $this -> nameToys = $_nameToys;
       return $this;
     }

     public function getName(){
         return $this -> nameToys;
       }
//------------------------------- Description
       public function setDescrizione($_descrizioneToys){
         $this -> descrizioneToys = $_descrizioneToys;
       return $this;
     }

     public function getDescrizione(){
         return $this -> descrizioneToys;
       }
//------------------------------- Price
       public function setPrice($_priceToys){
         $this -> priceToys = $_priceToys;
       return $this;
     }

     public function getPrice(){
         return $this -> priceToys;
       }
//------------------------------- Valutazione

     public function setValutazione(){
         if($this -> starToys == 1){
           $this -> valutazioneToys = "Mediocre";
         }elseif ($this -> starToys == 2){
           $this -> valutazioneToys = "Media";
         }elseif($this -> starToys == 3){
           $this -> valutazioneToys = "Buona";
         }elseif($this -> starToys == 4){
           $this -> valutazioneToys = "Ottima";
         }else{
           $this -> valutazioneToys = "Eccellente";
         }

        return $this;
     }

    public function getValutazione(){
      return $this -> valutazioneToys;
    }

}





















?>