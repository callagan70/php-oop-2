<?
class product{
    public $name;
    public $descrizione;
    public $price;
    public $star;
    // public $valutazione;

    public function __construct ($_name, $_descrizione, $_price){
        $this -> name -> $_name;
        $this -> descrizione = $_descrizione;
        $this -> price = $_price;
        $this -> star = setStar();
        // $this -> valutazione = setValutazione($star);
    }
//-------------------------------
    public function setName($_name){
        $this -> name = $_name;
        return $this;
    }

    public function getName(){
        return $this -> name;
      }
//-------------------------------
      public function setDescrizione($_descrizione){
        $this -> descrizione = $_descrizione;
        return $this;
    }

    public function getDescrizione(){
        return $this -> descrizione;
      }
//-------------------------------
      public function setPrice($_price){
        $this -> price = $_price;
        return $this;
    }

    public function getPrice(){
        return $this -> price;
      }
//-------------------------------
    public function setStar(){
      $this -> star = rand(0, 5);
      return $this;
    }

    public function getStar(){
      return $this -> star;
    }
//-------------------------------
    // public function setValutazione(){
    //     if($star = 1){
    //       $this -> valutazione ="Mediocre";
    //     }elseif ($star = 2){
    //       $this -> valutazione ="Media";
    //     }elseif($star = 3){
    //       $this -> valutazione ="Buona";
    //     }elseif($star = 4){
    //       $this -> valutazione ="Ottima";
    //     }else{
    //       $this -> valutazione ="eccellente";
    //     }

    //   return $this;
    // }

    // public function getValutazione(){
    //   return $this -> valutazione;
    // }
//-------------------------------

}?>


