<?php
header("Content-type: text/html; charset=utf-8");
Class person{
   private $name;
   private $age;
   private $sex;
 function __construct($name,$age,$sex){
   $this->name=$name;
   $this->age=$age;
   $this->sex=$sex;
 }
 public function __set($shuxingming,$value){
    if ($shuxingming=='age') {
        if ($value<0 or $value>100) {
            echo "您输入的年龄不合法";
            return;
        }
    }
    if ($shuxingming=='sex') {
        if ($value!='男' or $value!='女') {
            echo "您输入的性别不合法";
            return;
        }
    }
    $this->$shuxingming=$value;
 }
 public function __get($shuju){
    if ($shuju=='age') {
        if ($this->sex=='女') {
           echo "女生年龄保密";
        }
    }
    return $this->$shuju;
 }
 // public function walk(){
 //    echo "我可以走!";
 // }
 // public function talk(){
 //    echo "我可以说话！";
 // }
  public function printall(){
     echo "姓名:".$this->name.'年龄:'.$this->age.'性别:'.$this->sex."<br/>";
  }
}
$person1=new person('张三',20,'女');
echo $person1->age;



?>