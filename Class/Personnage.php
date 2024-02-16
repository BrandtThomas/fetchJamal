<?php 
class Personnage {
    public $hp = 10;
    public $atk = 1;
    

    public function tab(){
        return ["hp" => $this->hp, "atk" => $this->atk];
    }
}

?>