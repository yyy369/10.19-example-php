<?php 
    /**
    * Person类
    */
    class Person 
    {
        var $idCard;
        function __clone(){
            echo "对象被克隆了";
            //将对象型的属性手动克隆
            $this->idCard = clone $this->idCard;
        }  
    }

    /**
    * 身份证类
    */
    class IDCard 
    {
        public $num = "130123456789";
    }
    $p1 = new Person();
    $p1->idCard = new IDCard();
    $p2 = clone $p1;
    var_dump($p1,$p2);
    $p2->idCard->num='0000000000000';
    var_dump($p1,$p2);

 ?>