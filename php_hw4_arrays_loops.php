<?php
echo '<pre>';

// Task#1 (for)
echo '<h3>Task#1 (for)</h3>';

for ($i = 1, $n = 5; $i <= $n; $i++){
    print_r("Silence is golden".PHP_EOL);
}

// Task#2 (for)
echo '<h3>Task#2 (for)</h3>';
$summ = 0;

for ($i = 1, $n = 150; $i <= $n; $i++) {
    $summ = $summ + $i;
   }

print_r("FINAL_SUMM: ".$summ.PHP_EOL);

// Task#2 (while)
echo '<h3>Task#2 (while)</h3>';
$i = 1;
$summ = 0;

while ($i <= $n){
    $summ = $summ + $i;
    $i++ ;
}

print_r("FINAL_SUMM: ".$summ.PHP_EOL);

// Task#3
echo '<h3>Task#3</h3>';

for ($i = 1, $n = 200; $i <= $n; $i++){
    echo $i.PHP_EOL;
}

// Task#4 (for)
echo '<h3>Task#4 (for)</h3>';

for ($i = 200, $n = 1; $i >= $n; $i--){
    echo $i.PHP_EOL;
}

// Task#4 (while)
echo '<h3>Task#4 (while)</h3>';
$n = 1;
$i = 200;
while ($i >= $n){
    echo $i.PHP_EOL;
    $i--;
}

// Task#4 (foreach)
echo '<h3>Task#4 (foreach)</h3>';

$array4 = range($i = 1,$n = 200);
krsort($array4);

foreach ($array4 as $key => $value) {
    echo 'key: '.$key.'     value: '.$value.'<br>';
}


// Task#5 (for)
echo '<h3>Task#5 (for)</h3>';
$multi = 1;
for ($i = 1, $n = 50; $i <= $n; $i++){
    $multi = $multi * $i;
}
print_r("FINAL_MULTIPLICATION: ".$multi.PHP_EOL. '<i>Я не знаю как перевести в integer полученное значение</i>');

// Task#5 (foreach)
echo '<h3>Task#5 (foreach)</h3>';

$multi = 1;
$array5 = range($i = 1,$n = 50);
foreach ($array5 as $value){
    $multi = $multi * $value;
}
print_r("FINAL_MULTIPLICATION: ".$multi.PHP_EOL);

// Task#6 (for)
echo '<h3>Task#6 (for)</h3>';
for ($i = 1,$n = 1000, $mod3 = 0, $mod5 = 0; $i < $n; $i++){
    $mod3 = $i % 3;
    $mod5 = $i % 5;
    if ($mod3 == 0 and $mod5 == 0){
        echo $i.PHP_EOL;
    }
}

// Task#6 (while)
echo '<h3>Task#6 (while)</h3>';
$i = 1;
$n = 1000;
while ($i<$n){
    $mod3 = $i % 3;
    $mod5 = $i % 5;
    if ($mod3 == 0 and $mod5 == 0){
        echo $i.PHP_EOL;
    }
    $i++;

}

// Task#7 (for)
echo '<h3>Task#7 (for)</h3>';
$x1 = 0;
$x2 = 0;
$x3 = 0;
$x4 = 0;
$x5 = 0;
$x6 = 0;
$All = 0;
$Happy = 0;

for ($i =100000,$n = 999999 ; $i <= $n; $i++,$All++){
    $x1 = floor($i/100000);
    $x2 = floor(($i - $x1*100000)/10000);
    $x3 = floor(($i-$x1*100000-$x2*10000)/1000);
    $x4 = floor(($i-$x1*100000-$x2*10000-$x3*1000)/100);
    $x5 = floor(($i-$x1*100000-$x2*10000-$x3*1000-$x4*100)/10);
    $x6 = $i -$x1*100000-$x2*10000-$x3*1000-$x4*100 - $x5*10;
    if (($x1+$x2+$x3)==($x4+$x5+$x6)){
        $Happy++;
        print_r($i.PHP_EOL);
        }
}
echo "<b>TOTAL NUMBER OF TICKETS: $All</b>".PHP_EOL;
echo "<b>NUMBER OF HAPPY TICKETS: $Happy</b>".PHP_EOL;
echo '<b>PERCENT OF HAPPY TICKETS: '.round($Happy*100/$All,1).' %  </b>'.PHP_EOL;




// Task#8 (for)
echo '<h3>Task#8 (for)</h3>';

$array8 = array();
for ($i=0,$n=50;$i < $n ;$i++ ){
    if ($i%2==0){$array8[$i] = 0;}
    else{$array8[$i] = 1;}
}

print_r( $array8);

// Task#8 (while)
echo '<h3>Task#8 (while)</h3>';
unset($array8);

$array8 = array();
$i=0;
$n=50;
while ($i < $n ){

    if ($i%2==0){$array8[$i] = 0;}
    else{$array8[$i] = 1;}
    $i++;
}
print_r( $array8);

// Task#9 (for)
echo '<h3>Task#9 (for)</h3>';
$array9 = array();
for ($i=0,$n=50;$i < $n ;$i++ ){
    $array9[$i] = $i*$i;
}

print_r( $array9);


// Task#10
echo '<h3>Task#10 (for)</h3>';
$a = 5;
$b = 2;
$c = 7 ;
$d = 0;
$array_little_1 = range($a,$b);
sort($array_little_1);
$array_little_2 = range($c,$d);
sort($array_little_2);
echo '<b>First array</b>'.PHP_EOL;
print_r($array_little_1);
echo  '<b>Second array</b>'.PHP_EOL;
print_r($array_little_2);
$merged_array = array_merge($array_little_1,$array_little_2);
sort($merged_array);
echo '<b>Merged array</b>'.PHP_EOL;
print_r($merged_array);


// Task#11
echo '<h3>Task#11 </h3>';
$number = 19110;
$x1 = 0;
$x2 = 0;
$x3 = 0;
$x4 = 0;
$x5 = 0;
$x6 = 0;
$text = '';

$x1 = floor($number/100000);
$x2 = floor(($number - $x1*100000)/10000);
$x3 = floor(($number-$x1*100000-$x2*10000)/1000);
$x4 = floor(($number-$x1*100000-$x2*10000-$x3*1000)/100);
$x5 = floor(($number-$x1*100000-$x2*10000-$x3*1000-$x4*100)/10);
$x6 = $number -$x1*100000-$x2*10000-$x3*1000-$x4*100 - $x5*10;
   switch ((int)$x1) {
       case (0):
           $text = $text.'';
           break;
       case (1):
           $text = $text.'сто ';
           break;
       case (2):
           $text = $text.'двести ';
           break;
       case (3):
           $text = $text.'триста ';
           break;
       case (4):
           $text = $text.'четыреста ';
           break;
       case (5):
           $text = $text.'пятьсот ';
           break;
       case (6):
           $text = $text.'шестьсот ';
           break;
       case (7):
           $text = $text.'семьсот ';
           break;
       case (8):
           $text = $text.'восемьсот ';
           break;
       case (9):
           $text = $text.'девятьсот ';
           break;
   }

   if (($x2*10+$x3)>=10 and ($x2*10+$x3)<=19){
       switch ($x2*10+$x3){
           case (10):
               $text = $text.'десять ';
               break;
           case (11):
               $text = $text.'одинадцать ';
               break;
           case (12):
               $text = $text.'двенадцать ';
               break;
           case (13):
               $text = $text.'тринадцать ';
               break;
           case (14):
               $text = $text.'четырнадцать ';
               break;
           case (15):
               $text = $text.'пятнадцать ';
               break;
           case (16):
               $text = $text.'шестнадцать ';
               break;
           case (17):
               $text = $text.'семнадцать ';
               break;
           case (18):
               $text = $text.'восемнадцать ';
               break;
           case (19):
               $text = $text.'девятнадцать ';
               break;
          }
          $text = $text.'тысяч ';
   }
   else {
       switch ($x2) {
           case (0):
               $text = $text.'';
               break;
           case (1):
               $text = $text.'сто ';
               break;
           case (2):
               $text = $text.'двадцать ';
               break;
           case (3):
               $text = $text.'тридцать ';
               break;
           case (4):
               $text = $text.'сорок ';
               break;
           case (5):
               $text = $text.'пятьдесят ';
               break;
           case (6):
               $text = $text.'шестьдесят ';
               break;
           case (7):
               $text = $text.'семдесят ';
               break;
           case (8):
               $text = $text.'восемдесят ';
               break;
           case (9):
               $text = $text.'девяносто ';
               break;
       }
       switch ($x3) {
           case (0):
               $text = $text.'';
               break;
           case (1):
               $text = $text.'одна тысяча ';
               break;
           case (2):
               $text = $text.'две тысячи ';
               break;
           case (3):
               $text = $text.'три тысячи ';
               break;
           case (4):
               $text = $text.'четыре тысячи ';
               break;
           case (5):
               $text = $text.'пять тысяч ';
               break;
           case (6):
               $text = $text.'шесть тысяч ';
               break;
           case (7):
               $text = $text.'семь тысяч ';
               break;
           case (8):
               $text = $text.'восемь тысяч ';
               break;
           case (9):
               $text = $text.'девять тысяч ';
               break;
       }

   }



    switch ($x4) {
        case (0):
            $text = $text.'';
            break;
        case (1):
            $text = $text.'сто ';
            break;
        case (2):
            $text = $text.'двести ';
            break;
        case (3):
            $text = $text.'триста ';
            break;
        case (4):
            $text = $text.'четыреста ';
            break;
        case (5):
            $text = $text.'пятьсот ';
            break;
        case (6):
            $text = $text.'шестьсот ';
            break;
        case (7):
            $text = $text.'семьсот ';
            break;
        case (8):
            $text = $text.'восемьсот ';
            break;
        case (9):
            $text = $text.'девятьсот ';
            break;
    }

if (($x5*10+$x6)>=10 and ($x5*10+$x6)<=19) {
    switch ($x5 * 10 + $x6) {
        case (10):
            $text = $text.'десять ';
            break;
        case (11):
            $text = $text.'одинадцать ';
            break;
        case (12):
            $text = $text.'двенадцать ';
            break;
        case (13):
            $text = $text.'тринадцать ';
            break;
        case (14):
            $text = $text.'четырнадцать ';
            break;
        case (15):
            $text = $text. 'пятнадцать ';
            break;
        case (16):
            $text = $text.'шестнадцать ';
            break;
        case (17):
            $text = $text.'семнадцать ';
            break;
        case (18):
            $text = $text.'восемнадцать ';
            break;
        case (19):
            $text = $text. 'девятнадцать ';
            break;
    }
}
    else {
        switch ($x5) {
            case (0):
                $text = $text.'';
                break;
            case (1):
                $text = $text. 'сто ';
                break;
            case (2):
                $text = $text.'двадцать ';
                break;
            case (3):
                $text = $text.'тридцать ';
                break;
            case (4):
                $text = $text.'сорок ';
                break;
            case (5):
                $text = $text.'пятьдесят ';
                break;
            case (6):
                $$text = $text.'шестьдесят ';
                break;
            case (7):
                $text = $text.'семдесят ';
                break;
            case (8):
                $text = $text.'восемдесят ';
                break;
            case (9):
                $text = $text.'девяносто ';
                break;
        }

        switch ($x6) {
            case (0):
                $text = $text.'';
                break;
            case (1):
                $text = $text.'один';
                break;
            case (2):
                $text = $text.'два';
                break;
            case (3):
                $text = $text.'три';
                break;
            case (4):
                $text = $text.'четыре';
                break;
            case (5):
                $text = $text.'пять';
                break;
            case (6):
                $text = $text.'шесть';
                break;
            case (7):
                $text = $text.'семь';
                break;
            case (8):
                $$text = $text.'восемь';
                break;
            case (9):
                $text = $text. 'девять';
                break;
        }
    }
echo $number.PHP_EOL;
echo '<b>'.$text.'</b>';


// Task#12
echo '<h3>Task#12 </h3>';
$array12 = range('A','Z');
$i=0;
foreach ($array12 as $value){
    if ($i%2==0){
        print_r($value.PHP_EOL);
    }
    $i++;
}


?>