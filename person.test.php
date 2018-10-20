//深度克隆与浅层克隆的基本法

<?php
header("Content-type: text/html; charset=utf-8");
class idcard{
  public $id;
  function __construct($id){
    $this->id=$id;
  }
}
Class person{
   private $name;
   private $age;
   private $sex;
   private $id;
 function __construct($name,$age,$sex,$id){
   $this->name=$name;
   $this->age=$age;
   $this->sex=$sex;
 }
 function __clone(){
            echo "对象被克隆了";
            //将对象型的属性手动克隆
            $this->id = clone $this->id;
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
    if ($shuxingming=='id') {
      if(get_class($value)!='idcard'){
        echo "您输入的身份证号不合法";
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
$p1= new person('张三',20,'男',NULL);
$p1->id= new idCard('123456789');
$p2= new person('王五',20,'女',NULL);
$p2->id= new idCard('456789101');
var_dump($p1,$p2);
$p3= clone $p1;
$p3->name='赵六';
var_dump($p3->id);
$p3->id->id='963852741';
var_dump($p1,$p3);
