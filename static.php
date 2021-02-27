<?php


class BaiDu{
    public $name;

    public static $count=0;



    public function __construct($name)
    {
        $this->name = $name;
        self::$count ++;

    }

    /**
     * @return mixed
     */
    public static function getCount()
    {
        return '静态方法返回'. self::$count;
    }


}
//$db1 = new BaiDu('1');
//echo $db1::getCount();
//$db2 = new BaiDu('2');
//echo $db2::getCount();
//echo BaiDu::getCount();

class Child
{
    public $name;
    //这里定义并初始化一个静态变量 $nums
    public static $nums=0;
    public static $i=1;
    //构造函数
    function __construct($name)
    {
        $this->name=$name;
    }
    //静态方法
    public  function join_game()
    {
        //self::$nums 使用静态变量
        //self::$nums+=1;  或
        Child::$nums+=1;
        echo Child::$i.".".$this->name."加入堆雪人游戏！<br>";
        Child::$i++;
    }
}
//创建三个小孩
//$child1=new Child("李逵");
//$child1->join_game();
//$child2=new Child("张飞");
//$child2->join_game();
//$child3=new Child("唐僧");
//$child3->join_game();
//$child4=new Child("八戒");
//$child4->join_game();
////看看有多少人参加了游戏
//echo "<br/> 共有--".child::$nums."--个人参加了游戏！";


function foo(){
    static $int = 0;// correct
    static $int = 1+2;   // wrong (as it is an expression)
    static $int = sqrt(121); // wrong (as it is an expression too)
    $int++;
    echo $int;
}