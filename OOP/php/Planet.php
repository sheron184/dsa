<?php 
class Planet{
    public $name;
    public $mass;
    public $distanceFromSun;
    public function __construct($name,$mass,$distanceFromSun){
        $this->name = $name;
        $this->mass = $mass;
        $this->distanceFromSun = $distanceFromSun;
    }
    public function getDetails(){
        return ["name"=>$this->name,"mass"=>$this->mass,"distanceFromSun"=>$this->distanceFromSun];
    }
}
class Moon extends Planet{
    
}
function main(){
    $planet = new Planet("mars",100,300);
    var_dump($planet->getDetails());
}
main();
?>