<?php
class HelloWorld {
    public function greet() {
        return "<h1>Hello World!</h1>";
    }

    public function today() {
        return "<p> Today is " . date('1') ."</p>";
    }
}
$hello = new HelloWorld();
