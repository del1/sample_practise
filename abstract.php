<?php 
interface MyInterface{
    public function foo();
    public function bar();
}

abstract class MyAbstract1{
    abstract public function baz();
}


abstract class MyAbstract2 extends MyAbstract1 implements MyInterface{
    public function foo(){ echo "foo"; }
    public function bar(){ echo "bar"; }
    public function baz(){ echo "baz"; }
}

class MyClass extends MyAbstract2{
}

$obj=new MyClass;
$obj->foo();
$obj->bar();
$obj->baz();