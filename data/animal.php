<?
class product{ 
    public $name;
    public $descrizione;
    public $price;

    public function _construct ($_name, $_descrizione, $_price){
        $this -> setName($_name);
        $this -> setDescrizione($_descrizione);
        $this -> setPrice($_price);
    }

    public function setName(){
        $this -> name = $_name;
        return $this;
    }

    public function getName(){
        return $this -> name;
      }

      public function setDescrizione(){
        $this -> name = $_descrizione;
        return $this;
    }

    public function getDescrizione(){
        return $this -> descrizione;
      }
      public function setPrice(){
        $this -> name = $_price;
        return $this;
    }

    public function getPrice(){
        return $this -> price;
      }




}


















?>


