<?php
class valid{

    private $users = array("Karel" => "abc", "Josef" => "cba", "Marek" => "123");

    public function __construct($name, $pass){
        $this->name = $name;
        $this->pass = $pass;
    }
    public function validation()
    {
        if ($this->users[$this->name] == $this->pass){
            return true;
        }
    }
}


class login
{
    public $arrayed = [];
    public function logged()
    {
        return "Prihlaseni uzivatele: " . implode(", ",$this->arrayed);
    }
    public function log($name, $pass)
    {
        $innerobject = new valid($name, $pass);
        if ($innerobject->validation()) {
            array_push($this->arrayed, $name);
        }

    }
}

$obj1 = new login();
echo $obj1->logged() . "<br/>";
$obj1->log("Karel", "abc");
echo $obj1->logged() . "<br/>";
$obj1->log("Marek", "12");
echo $obj1->logged() . "<br/>";
$obj1->log("Josef", "cba");
echo $obj1->logged() . "<br/>";
