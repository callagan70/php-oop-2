<?php

class product{
    public $name;
    public $descrizione;
    public $price;
    public $star;
    // public $valutazione;

    public function __construct ($_name, $_descrizione, $_price){
        $this -> name = $_name;
        $this -> descrizione = $_descrizione;
        $this -> price = $_price;
        $this -> setStar();
        $this -> setValutazione();
      }


//-------------------------------
  public function setStar(){
    $this -> star = rand(1, 5);
    return $this;
  }

  public function getStar(){
    return $this -> star;
  }
//-------------------------------
    // public function setName($_name){
    //     $this -> name = $_name;
    //     return $this;
    // }

    // public function getName(){
    //     return $this -> name;
    //   }
//-------------------------------
    //   public function setDescrizione($_descrizione){
    //     $this -> descrizione = $_descrizione;
    //     return $this;
    // }

    // public function getDescrizione(){
    //     return $this -> descrizione;
    //   }
//-------------------------------
    //   public function setPrice($_price){
    //     $this -> price = $_price;
    //     return $this;
    // }

    // public function getPrice(){
    //     return $this -> price;
    //   }
//-------------------------------

     public function setValutazione(){
         if($this -> star == 1){
           $this -> valutazione ="Mediocre";
         }elseif ($this -> star == 2){
           $this -> valutazione ="Media";
         }elseif($this -> star == 3){
           $this -> valutazione ="Buona";
         }elseif($this -> star == 4){
           $this -> valutazione ="Ottima";
         }else{
           $this -> valutazione ="eccellente";
         }

        return $this;
     }

    public function getValutazione(){
      return $this -> valutazione;
    }
//-------------------------------

}?>


