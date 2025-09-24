<?php

echo 'Passaggio per riferimento'.'<br>';
$a = 1;
$b = 2;
$c = 3;

function Media8(&$a,&$b,&$c){
    $a*=10;
    $b*=20;
    $c*=30;
    return($a + $b + $c)/3;
}

echo Media8($a,$b,$c).'<br>';
echo $a.''.$b.''.$c.'<br>';
echo '<br>';

echo 'Proviamo gli array'.'<br>';
echo 'Anchessi vengono passati per valore'.'<br>';

$numbers=[1,2,3,4,5];

function MediaArray($numbers): void{ //array by values (con &array by ref)
    for($i = 0; $i < count($numbers); $i++)
        $numbers[$i] *= 10;
}

MediaArray($numbers);
foreach ($numbers as $num)
    echo $num.'<br>';


echo 'Utilizzo di global'.'<br>';
$myvar = 55; //le variabili globali definite al di fuori della funzione non viene vista

/*function printValue(): void{
    echo $myvar.'<br>';
}*/

function printValue2(): void{
    global $myvar;
    echo $myvar.'<br>';
}

//printValue();
printValue2();
echo '<br>';



///////////////////////////////////////
echo 'Possibilità di passare un numero qualsiasi di parametri trattando una variabile come array'.'<br>';
function Media9(...$nums):float{ //variabil function
    $sum = 0;
    for($i = 0; $i <count($nums); $i++)
        $sum +=$nums[$i];
    return $sum/count($nums);
}

echo Media9(10,20,30).'<br>';
echo Media9(10,20,30,40,50).'<br>';
echo Media9(10,20,30,40,50,60,70,80).'<br>';
echo '<br>';

///////////////////////////////////////
echo 'Il codice cambia il trattamento dei dati perche puo assumere diverse funzioni'.'<br>';

function sum($a, $b): int{
    return $a +$b;
}

function mol($a, $b): int{
    return $a *$b;
}

$randomNum = mt_rand(0,1); //in base al numero casuale che assumerà restituirà una delle due funzioni
if($randomNum == 1)
    $functionVar = 'sum';
else
    $functionVar = 'mol';

$result = $functionVar(10,20);
echo $result.'<br>';
echo '<br>';

///////////////////////////////////////
echo 'Invochiamo una funzione dentro una funzione'.'<br>';

//1)Possiamo fare un codice molto flessibile e potente
//2)PHP e altri linguaggi funzionano con le callback quindi per sfruttare il linguaggio bisogna conoscere le callbackl
function filter($min, $a, $b, $func){ //callback
    if($func($a,$b) < $min)
        return 'nessun valore rilevante';
    else
        return 'valore'.$func($a, $b);
}

echo filter(5,10,20, $functionVar).'<br>';
echo '<br>';

///////////////////////////////////////
//array_map() //array_map mi trasforma un array di numeri in un'atro array di numeri trammite una callback

$numbers=[1,2,3,4,5];
function myElab($el){
    return $el *$el;
}

echo 'Array_map:'.'<br>';
$varMyElab = 'myElab';

$arrayResult = array_map($varMyElab, $numbers);
var_dump($arrayResult);
echo '<br>';
//Atro modo più veloce
/*$arrayResult2 = array_map(function($el) //Anonymous function
{
    return $el * $el;
}, $numbers);
var_dump($arrayResult2);*/

class Person{
    /*
    private string $name;
    private int $age;
    private string $email;

    public function constructor(string $name, int $age, string $email){
        $this.$name = $name;
        $this.$age = $age;
        $this.$email = $email;
    }
    */
    public function __construct(protected string $name, protected int $age /*= 0*/, protected string $email /*= ""*/){

    }
    const FAV_COLOR = "green";
    public function getName():string{
        return $this ->name;
    }
    public function setName(string $name):void{
        $this->name = $name;
    }
    public function getAge():string{
        return $this ->name;
    }
    public function setAge(int $age):void{
        $this->age = $age;
    }
    public function getEmail():string{
        return $this ->email;
    }
    public function setEmail(string $email):void{
        $this->email = $email;
    }
    public function intro():string{
        return "Hi, my name is {$this->name}, i'm {$this->age} years old and my email is {$this->email}
    and my favorite color is"." ".self::FAV_COLOR."<br>";
    }
}
class studente extends person implements donator{
    public function __construct(string $name, int $age=0, ?string $email, private string $school){
        parent::__construct($name,$age,$email);
    }
    public function intro(): string
    {
        return parent::intro()."and my school is {$this->school}"; //
    }
    public function presentation(): string
    {
        return "Hi, my name is {$this->name}, i'm {$this->age} years old and my email is {$this->email}
    and my favorite color is"." ".self::FAV_COLOR." "."and I attend {$this->school}"."<br>"; //
    }
    public function toDo(): string
    {
        return "My name is $this->name and I'm a blood donator";
    }
}
interface donator {
    public function toDo():string;
}
class Teacher{
    private static int $register = 0;
    public function __construct(private string $name, private string $lastname)
    {
        self::$register ++;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }
    public static function getRegister():int{
        return self::$register;
    }
}







