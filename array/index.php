<?php
$houses = array('Colonial','Contemporaneo', 'Sudoeste','Metro');

echo $houses[0].'<br>';
echo $houses[1].'<br>';
echo $houses[2].'<br>';
echo $houses[3].'<br>';

echo '<hr>';


// Valores Mistos

$dynamic = array(7,'House', 'Car', array('Relva','cortadora','adulbo'));

echo $dynamic[0].'<br>';
echo $dynamic[1].'<br>';
echo $dynamic[2].'<br>';

echo '<br>';

echo $dynamic[3][0].'<br>';
echo $dynamic[3][1].'<br>';
echo $dynamic[3][2].'<br>';
echo '<hr>';
// Valores Mistos com mais um nível

$dynamic=
array(7,'House', 'Car',
    array('Relva',
            array(
                'Anderson',
                'Camila',
                'Lídia'
            ),
        'Filha')
);

$dynamic[]='Bike';
$dynamic[1]='Big Casa';
$dynamic[9] = 'Surf Bord';

echo $dynamic[0].'<br>';
echo $dynamic[1].'<br>';
echo $dynamic[2].'<br>';

echo '<br>';
echo $dynamic[3][0].'<br>';
echo $dynamic[3][1][0].'<br>';
echo $dynamic[3][1][1].'<br>';
echo $dynamic[3][1][2].'<br>';
echo $dynamic[3][2].'<br>';

echo '<pre>';
print_r($dynamic);
echo '<hr>';

// Matrizes associativas
echo '<hr>';

$dynamic= array('numero'=>7,'viver' =>'Familia','dirigir'=>'carro',array('cortar' =>'relva', array('trator'=>'Jhon','trator2'=>'João','trator3'=>'José'),'panorama' => 'adulbo'));

$dynamicMelhorado = 
[// 1º Array
    'numero' => 7,
    'viver' => 'Familia',
    'dirigir' => 'Carro',
    [ // 2º Array
    'cortar' => 'relva',
        [//3º Array
            'trator' => 'Jonh',
            'trator2' => 'João',
            'trator3' => 'José',
        ],
    'Panorama' => 'Adulbo',
    ],
];

echo $dynamicMelhorado['numero'].'<br>';
echo $dynamicMelhorado['viver'].'<br>';
echo $dynamicMelhorado['dirigir'].'<br>';
echo $dynamicMelhorado[0]['cortar'].'<br>';
echo $dynamicMelhorado[0][0]['trator'].'<br>';
echo $dynamicMelhorado[0][0]['trator2'].'<br>';
echo $dynamicMelhorado[0][0]['trator3'].'<br>';
echo $dynamicMelhorado[0]['Panorama'].'<br>';
echo '<pre>';
print_r($dynamicMelhorado);

// Funções de Arrays

//is_Array
$one = is_array($houses);
echo $one ? 'Está variável $houses é um array':'Está variável $houses não é um array';
echo '<hr>';
$two = is_array($dynamicMelhorado['numero']);
echo $two ? 'Está variável $two é um array':'Está variável $two não é um array';
echo '<hr>';
$tree = is_array($teste);
echo $tree ? 'Está variável $tree é um array':'Está variável $tree não é um array';

//in_Array

// $n = 
// [
//     1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246, 247, 248, 249, 250, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261, 262, 263, 264, 265, 266, 267, 268, 269, 270, 271, 272, 273, 274, 275, 276, 277, 278, 279, 280, 281, 282, 283, 284, 285, 286, 287, 288, 289, 290, 291, 292, 293, 294, 295, 296, 297, 298, 299, 300, 301, 302, 303, 304, 305, 306, 307, 308, 309, 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 322, 323, 324, 325, 326, 327, 328, 329, 330, 331, 332, 333, 334, 335, 336, 337, 338, 339, 340, 341, 342, 343, 344, 345, 346, 347, 348, 349, 350, 351, 352, 353, 354, 355, 356, 357, 358, 359, 360, 361, 362, 363, 364, 365, 366, 367, 368, 369, 370, 371, 372, 373, 374, 375, 376, 377, 378, 379, 380, 381, 382, 383, 384, 385, 386, 387, 388, 389, 390, 391, 392, 393, 394, 395, 396, 397, 398, 399, 400, 401, 402, 403, 404, 405, 406, 407, 408, 409, 410, 411, 412, 413, 414, 415, 416, 417, 418, 419, 420, 421, 422, 423, 424, 425, 426, 427, 428, 429, 430, 431, 432, 433, 434, 435, 436, 437, 438, 439, 440, 441, 442, 443, 444, 445, 446, 447, 448, 449, 450, 451, 452, 453, 454, 455, 456, 457, 458, 459, 460, 461, 462, 463, 464, 465, 466, 467, 468, 469, 470, 471, 472, 473, 474, 475, 476, 477, 478, 479, 480, 481, 482, 483, 484, 485, 486, 487, 488, 489, 490, 491, 492, 493, 494, 495, 496, 497, 498, 499, 500, 501, 502, 503, 504, 505, 506, 507, 508, 509, 510, 511, 512, 513, 514, 515, 516, 517, 518, 519, 520, 521, 522, 523, 524, 525, 526, 527, 528, 529, 530, 531, 532, 533, 534, 535, 536, 537, 538, 539, 540, 541, 542, 543, 544, 545, 546, 547, 548, 549, 550, 551, 552, 553, 554, 555, 556, 557, 558, 559, 560, 561, 562, 563, 564, 565, 566, 567, 568, 569, 570, 571, 572, 573, 574, 575, 576, 577, 578, 579, 580, 581, 582, 583, 584, 585, 586, 587, 588, 589, 590, 591, 592, 593, 594, 595, 596, 597, 598, 599, 600, 601, 602, 603, 604, 605, 606, 607, 608, 609, 610, 611, 612, 613, 614, 615, 616, 617, 618, 619, 620, 621, 622, 623, 624, 625, 626, 627, 628, 629, 630, 631, 632, 633, 634, 635, 636, 637, 638, 639, 640, 641, 642, 643, 644, 645, 646, 647, 648, 649, 650, 651, 652, 653, 654, 655, 656, 657, 658, 659, 660, 661, 662, 663, 664, 665, 666, 667, 668, 669, 670, 671, 672, 673, 674, 675, 676, 677, 678, 679, 680, 681, 682, 683, 684, 685, 686, 687, 688, 689, 690, 691, 692, 693, 694, 695, 696, 697, 698, 699, 700, 701, 702, 703, 704, 705, 706, 707, 708, 709, 710, 711, 712, 713, 714, 715, 716, 717, 718, 719, 720, 721, 722, 723, 724, 725, 726, 727, 728, 729, 730, 731, 732, 733, 734, 735, 736, 737, 738, 739, 740, 741, 742, 743, 744, 745, 746, 747, 748, 749, 750, 751, 752, 753, 754, 755, 756, 757, 758, 759, 760, 761, 762, 763, 764, 765, 766, 767, 768, 769, 770, 771, 772, 773, 774, 775, 776, 777, 778, 779, 780, 781, 782, 783, 784, 785, 786, 787, 788, 789, 790, 791, 792, 793, 794, 795, 796, 797, 798, 799, 800, 801, 802, 803, 804, 805, 806, 807, 808, 809, 810, 811, 812, 813, 814, 815, 816, 817, 818, 819, 820, 821, 822, 823, 824, 825, 826, 827, 828, 829, 830, 831, 832, 833, 834, 835, 836, 837, 838, 839, 840, 841, 842, 843, 844, 845, 846, 847, 848, 849, 850, 851, 852, 853, 854, 855, 856, 857, 858, 859, 860, 861, 862, 863, 864, 865, 866, 867, 868, 869, 870, 871, 872, 873, 874, 875, 876, 877, 878, 879, 880, 881, 882, 883, 884, 885, 886, 887, 888, 889, 890, 891, 892, 893, 894, 895, 896, 897, 898, 899, 900, 901, 902, 903, 904, 905, 906, 907, 908, 909, 910, 911, 912, 913, 914, 915, 916, 917, 918, 919, 920, 921, 922, 923, 924, 925, 926, 927, 928, 929, 930, 931, 932, 933, 934, 935, 936, 937, 938, 939, 940, 941, 942, 943, 944, 945, 946, 947, 948, 949, 950, 951, 952, 953, 954, 955, 956, 957, 958, 959, 960, 961, 962, 963, 964, 965, 966, 967, 968, 969, 970, 971, 972, 973, 974, 975, 976, 977, 978, 979, 980, 981, 982, 983, 984, 985, 986, 987, 988, 989, 990, 991, 992, 993, 994, 995, 996, 997, 998, 999, 1000.
// ];

// echo '<pre>';
// print_r($n);

// if(in_array(1001,$n))
// {
//    echo 'Foi encontrado o valor dentro do Array';
// }else
// {
//    echo 'Não foi encontrado';
// }


echo '<hr>';

$dynamic = 
[
    'number' => 10,
    'live' => 'House',
    'drive' => 'Car',
        [
         'cortar' => 'Grama',   
        
            [
                'trator' => 'Jony',
                'trator2' => 'pessoa 2',
                'trator3' => 'pessoa 3',
            ],
          'panorama' => 'adulbo'
        ]
];


$trator = $dynamic[0][0]['trator'];

if(in_array('Grama', $dynamic[0]))
{
    echo "Hora de Cortar a Grama com {$trator}";
}
    else{
        echo "Não é hora de Cortar a Grama";
}


//array_unique

$repetido = [
    "Este é um texto repetido",
    "Este é um texto repetido",
    "Este é um texto repetido",
    "Mais um texto que não é repetido",
    9,9,9,9,9,
    "Este é outro texto que estava repetido",
    "Este é outro texto que estava repetido",
    "Este é outro texto que estava repetido",
    "Este é outro texto que estava repetido",
];

$novo_texto = array_unique($repetido);

echo '<hr>';

foreach($novo_texto as $n)
{
    echo $n ."<br>";
}

echo '<hr>';
//array_search

$frases = 
[
    "Primeira Frase",
    "Segunda Frase",
    "Terceira Frase",
    "Quarta Frase",
];

$localise_frase = array_search("Quarta Frase", $frases);
echo"Este é um exemplo de  array_search.<br>";
echo " A Quarta Frase se encontra no indice $localise_frase dentro do array!";
echo '<hr>';

//array_reverse

echo "Este é um exemplo de array_reverse <br><br>";
$array=
[
    "Linha 1",
    "Linha 2",
    "Linha 3",
    "Linha 4"
];

$array1 = array_reverse($array);

foreach($array1 as $key => $values){
    echo $key. '-' . $values.'<br>';
}

echo '<hr>';

$array2 = array_reverse($array);

foreach($array2 as $key2 => $values2){
    echo $key2 .'-' . $values2 .'<br>';
}

echo '<hr>';
echo "Este é um exemplo de array_map <br><br>";

$array =
[
    "Passar Dados para laravel",
    "Adicionar Mensagens Flash",
    "Carregamento Automatico",
    "Enviar Email com Laravel"
];

function lower($array)
{
    return strtolower($array);
}

$cl = array_map('lower', $array);

foreach($cl as $l){
    echo $l.'<br>';
}

echo '<hr>';
echo "Este é um exemplo de array_diff <br><br>";

$arrayOne =
[
    'Google',
    'Mozila',
    'Firefox',
    'Edge',
    'Opera' 
];

$arrayTwo =
[
    'Google',
    'Mozila',
    'Firefox',
    'Edge',
     
];

$diff = array_diff($arrayOne, $arrayTwo);
print_r($diff);


//$array_or_countable
echo '<hr>';
echo "Este é um exemplo de array_or_countable <br><br>";

$dinamic = [
    'number' => 7,
    'live' => 'House',
    'driver' => 'Car',
    [
        'mow'=> 'Jon Daree',
        [
            'Tractor1' => 'Amarelo',
            'Tractor2' => 'Verde',
            'Tractor3' => 'Vermelho'
        ],
        'develop' => 'Php'
    ]
];

echo '$dinamic = [<br>';
echo  "'number' => 7,<br>";
echo  "'live' => 'House',<br>";
echo  "'driver' => 'Car',<br>";
echo  "[<br>";
echo  "'mow'=> 'Jon Daree',<br>";
echo  "[<br>";
echo  " 'Tractor1' => 'Amarelo',<br>";
echo  " 'Tractor2' => 'Verde',<br>";
echo  " 'Tractor3' => 'Vermelho'<br>";
echo  "],<br>";
echo  "  'develop' => 'Php'<br>";
echo  "]<br>";
echo  "];<br>";

$v1 = count($dinamic);
echo $v1;

//$array max, min, array_rand
echo '<hr>';
echo "Este é um exemplo de 'array' max, min, array_rand<br><br>";

$valores = ['123','10','1','200','300','30','0'];
echo "Valor máximo ".max($valores).'<br>';
echo "Valor Minimo " .min($valores).'<br>';
echo "Valor aleatório ". array_rand($valores);

//array_count_values
echo '<hr>';
echo "Este é um exemplo de array_count_values<br><br>";

$letras = ['L','o','r','e','m','I','p','s','u','m','é','s','i','m','p','l','e','s','m','e','n','t','e','u','m','t','e','x','t','o','f','i','c','t','í','c','i','o', 'd','a','i','n','d','ú','s','t','r','i','a','d','e','i','m','p','r','e','s','s','ã','o','e','c','o','m','p','o','s','i','ç','ã','o','L','o','r','e','m','I','p','s','u','m','t'];
$valores = array_count_values($letras);
echo '<pre>';
print_r($valores);


//srt_split
echo '<hr>';
echo "Este é um exemplo de srt_split,preg_replace e array_count_values <br><br>";
$texto = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id hendrerit justo. In sit amet porta orci. Proin nec est eu sapien tincidunt euismod vitae sit amet magna. Vivamus at erat interdum, bibendum diam non, sodales nibh. Ut eleifend lectus quis diam lobortis, vitae tincidunt nibh vulputate. Pellentesque sem ante, mattis semper tortor in, pretium tincidunt nisi. Curabitur ligula quam, egestas quis gravida et, molestie id ipsum. Integer cursus lorem non porta commodo.

Morbi sit amet volutpat lacus. Maecenas in pretium velit. Donec non libero sit amet nunc maximus sagittis sed id erat. Aenean quis sollicitudin urna. Proin quis malesuada dolor, id faucibus tortor. Vivamus ex leo, volutpat sit amet justo et, ultrices mollis lacus. Nunc maximus dapibus diam, non fermentum arcu gravida nec. Ut sagittis faucibus sapien vitae semper. Praesent scelerisque, nunc pharetra lacinia aliquet, arcu metus accumsan lorem, id laoreet libero mauris eget magna. Etiam sagittis lobortis nisl at ultrices. Cras mi elit, tristique pharetra felis non, mollis lobortis ligula. Proin erat risus, commodo sit amet ultricies eget, imperdiet eu neque. Vestibulum iaculis nulla a dignissim congue. Morbi eleifend sodales mauris id finibus. Aliquam et vehicula ex, sit amet luctus nulla. Pellentesque vitae mattis leo.

Vivamus porttitor purus sed metus ultricies, at interdum nibh interdum. Duis leo augue, tincidunt ut ultricies vitae, laoreet vitae mi. Quisque aliquet tincidunt augue ac porta. Curabitur rhoncus vehicula orci id mattis. Aenean feugiat rhoncus fringilla. Curabitur ut quam id sapien tristique suscipit. Phasellus condimentum molestie volutpat. Aenean et mauris scelerisque, pretium turpis et, commodo dolor. In at posuere eros, quis scelerisque tortor. Aliquam porta nulla in ultrices pellentesque. Nam sed vehicula ante. Donec at dui mi. Sed magna velit, vulputate ultrices diam id, tristique viverra odio. Etiam sapien lorem, porttitor non dictum finibus, eleifend at tellus. Mauris facilisis, erat a mattis vulputate, metus libero convallis massa, ac eleifend ligula mi ac nisi.

Mauris eleifend mauris lorem, laoreet euismod neque faucibus eget. Fusce nisi ligula, eleifend vel ipsum quis, semper laoreet turpis. Vivamus elementum enim non libero molestie cursus. Pellentesque mi lacus, semper et felis ut, scelerisque vulputate nulla. Vestibulum non felis eu nibh tincidunt condimentum. Suspendisse commodo justo libero, et viverra nulla ultrices vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer velit libero, fringilla at scelerisque ut, fermentum sed diam. Cras varius ipsum in mauris convallis, eget ultricies magna interdum. Nunc aliquet et sapien sit amet facilisis. Nam malesuada elit sit amet massa convallis hendrerit. Curabitur ut leo erat. Morbi enim purus, tristique a vulputate nec, auctor eget purus.

Donec ac interdum nulla. Ut aliquet porttitor turpis sit amet tristique. Maecenas ac ligula semper, hendrerit nulla at, euismod elit. Nunc tortor justo, lobortis et rutrum et, tincidunt nec libero. Donec ornare aliquam orci at sagittis. Vestibulum sed justo tempor, facilisis erat non, suscipit libero. In convallis ut est ut placerat. Donec sit amet odio quam. Nunc tincidunt mauris lorem. In non ullamcorper lacus. Donec laoreet nibh nulla, non pulvinar odio tristique at.';
$novaString = preg_replace("/\s+/", "", $texto); // removendo todos os espaços dos textos.
$arr = str_split($novaString);
print_r(array_count_values($arr));


//sort()
echo '<hr>';
echo "Este é um exemplo de sort() <br><br>";


$mixed = [
    'number' => 7,
    'live' => 'House',
    'driver' => 'Car',
    [
        'mow'=> 'Jon Daree',
        [
            'Tractor1' => 'Amarelo',
            'Tractor2' => 'Verde',
            'Tractor3' => 'Vermelho'
        ],
        'develop' => 'Php'
    ]
];

$veggies = [
    "Spinach",
     "Corn",
     "Carrots",     
     "Cucumbers",
        [            
            "TomatoesTipo2"=>'Yellow',
            "TomatoesTipo1"=>'Red',
        ],
    ];

$tech = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung',
    'Red Hat'
];
$stocktickers = ['aapl', 'aapl', 'aapl', 'goog', 'goog', 'yhoo', 'fslr', 'msft', 'csco', 'csco'];
 
$numbers = ['12', '234651', '234', '41', '89', '196583', '1', '86', '3', '5', '9'];

echo '<pre>';
 
sort($mixed);
sort($veggies);
sort($stocktickers);
sort($numbers);
 
print_r($mixed);
print_r($veggies);
print_r($stocktickers);
print_r($numbers);

//asort().
echo '<hr>';
echo "Este é um exemplo de asort() <br><br>";

echo '<pre>';
 
asort($mixed);
asort($veggies);
asort($stocktickers);
asort($numbers);
 
print_r($mixed);
print_r($veggies);
print_r($stocktickers);
print_r($numbers);


//asort().
echo '<hr>';
echo "Este é um exemplo de asort() <br><br>";

echo '<pre>';
 
rsort($mixed);
rsort($veggies);
rsort($stocktickers);
rsort($numbers);
 
print_r($mixed);
print_r($veggies);
print_r($stocktickers);
print_r($numbers);

//arsort().
echo '<hr>';
echo "Este é um exemplo de arsort() <br><br>";

echo '<pre>';
 
arsort($mixed);
arsort($veggies);
arsort($stocktickers);
arsort($numbers);
 
print_r($mixed);
print_r($veggies);
print_r($stocktickers);
print_r($numbers);

//implode() Pega um array e converte em string.
echo '<hr>';
echo "Este é um exemplo de implode <br><br>";

$separador = ' ';

echo implode($separador,$letras);

//explode() pega uma string e converte em array.
echo '<hr>';
echo "Este é um exemplo de explode <br><br>";

$array = explode($separador,$texto);

echo '<pre>';

print_r($array);


//array_key_exists
echo '<hr>';
echo "Este é um exemplo de array_key_exists <br><br>";


$frutas = ['Fruta' => 'Maçã','Filme'=>'Os trapalhões','Seriado'=> 'Todo mundo odeia o Cris'];

$true = array_key_exists('Fruta',$frutas);

echo "Você tem Fruta no cardápio ?";

if($true)
{
    echo " Sim temos frutas no cardápio.";
}else{
    echo"Não temos frutas no cardápio";
}

//array_keys
echo '<hr>';
echo "Este é um exemplo de array_keys <br><br>";

$keys = array_keys($frutas);
echo '<pre>';
print_r($keys);


//array_values

echo '<hr>';
echo "Este é um exemplo de array_values <br><br>";

$values = array_values($frutas);
echo '<pre>';
print_r($values);


//array_push
echo '<hr>';
echo "Este é um exemplo de array_push <br><br>";

$array = [
    'Apples',
    'Blueberries',
    'Pumpkins',
    'Corn',
];

array_push($array,'Novo Valor');

echo '<pre>';
print_r($array);


//array_pop
echo '<hr>';
echo "Este é um exemplo de array_pop <br><br>";

$cesta = array("laranja", "banana", "melancia", "morango");
echo '$cesta = array("laranja", "banana", "melancia", "morango")';
$fruta = array_pop($cesta);
print_r($cesta);

//array_unshift

echo '<hr>';
echo "Este é um exemplo de array_unshift <br><br>";

$array = [
    'Apples',
    'Blueberries',
    'Pumpkins',
    'Corn',
    'Watermelons',
];

echo "$array = [";
echo " 'Apples',";
echo " 'Blueberries',";
echo " 'Pumpkins',";
echo " 'Corn',";
echo " 'Watermelons',";
echo "]";

array_unshift($array, 'Apple Pies');
 
echo '<pre>';
 
print_r($array);

