<?php
// Declara uma função anônima(lambda) básica
// (sem muito uso do jeito que está)
function($name, $timeOfDay)
{
    return "Bom/boa $timeOfDay, $name";
};

//Usando uma função anônima em uma variável
$armazena=function($name, $timeOfDay)
{
    return "Bom/boa $timeOfDay, $name";
};

echo $armazena('Anderson', 'Dia');

echo '<hr>';

//Usando uma função anônima para armazenar arrays

$lukyDip = [
    function()
    {
        echo "Você ganhou um saco de caramelos";
    },

    function()
    {
        echo 'Você ganhou um carro';
    },

    function()
    {
        echo 'Você ganhou uma casa';
    }
];

$choice = rand(0,2);
$lukyDip[$choice]();
// Funções anônimas como Callback no arrayMap()
// function nameToGreeting($name)
// {
//     return "Olá " . ucfirst($name) . "!";
// }
// $names = ['Anderson Santos','Camila Ribeiro', 'Pretinha', 'Mary'];
// print_r(array_map(nameToGreeting, $names));
//Warning: Use of undefined constant nameToGreeting - assumed 'nameToGreeting' 
//(this will throw an Error in a future version of PHP).
echo '<hr>';

//Callback com função anônima
$names = ['Anderson Santos','Camila Ribeiro', 'Pretinha', 'Mary'];

print_r(array_map(function($name){
    return "Olá " . ucfirst($name) . "!";
},$names));

echo '<hr>';
//Ordenação personalizada com usort() pela chave.

$pessoas = 
[
   ['nome' => 'Silvia','idade' => '50',],

   ['nome'=> 'Anderson','idade'=> '35',],

   ['nome' => 'Camila','idade'=> '33',],

   ['nome' => 'Orsine','idade'=> '20',],

   
];

usort($pessoas,function($personA,$personB){
    return ($personA["idade"] < $personB["idade"])?-1:1; // se true será movido para baixo na lista se false será movido para cima na lista
});

print_r($pessoas);

echo'<pre>';
var_dump($pessoas);
echo'</pre>';

echo '<hr>';

// Um closure simples

function getGreentignFunction(){

    $timeOfDay = 'dia';
    return(function($name) use(&$timeOfDay){
        $timeOfDay = ucfirst($timeOfDay);
        return("Bom
         $timeOfDay, $name!");
    });
};

$greetignFuction = getGreentignFunction();
echo $greetignFuction("Anderson Santos");

