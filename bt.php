<?php
class grandfather {
    public $run;
    public $age;
    public function __construct($run,$age)
    {
        $this->run;
        $this->age;
    }
    function toString(){
        return $this->run.$this->age;
    }
}
class father extends grandfather{
    public $sing;
    public function   __construct($sing,$run,$age)
    {
        $this->sing=$sing;
        parent:: __construct($sing,$age,$age);
    }
    function toString(){
        return parent ::toString;
    }

}