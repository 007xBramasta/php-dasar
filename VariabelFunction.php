 <?php

 function foo()
 {
    echo "Foo" . PHP_EOL;
 }

 function bar()
 {
    echo "Bar" . PHP_EOL;
 }

 $functionYangDiPanggil ="foo";
 $functionYangDiPanggil();

 $functionYangDiPanggil ="bar";
 $functionYangDiPanggil();

 function sayHello(string $name, $filter)
 {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
 }

 function sampleName(string $name): string {
    return "Sample $name";
 }

 sayHello("Bramasta", "sampleName");
 sayHello("Bramasta", "strtoupper");
 sayHello("Bramasta", "strtolower");
