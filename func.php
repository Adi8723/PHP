<?php
function info($word){
    echo "info printed? $word";

}
// info("Hallo it was printed");
// info("test");
// info(343);


// function math($x, $y){
//     $res = $x + $y;
//     return $res;

// }
// $res1 = math(3, 5);
// $res2 =math(93, 51);
// echo $res1;
// echo $res2;
// info($res1);

function summary($ar){
    foreach ($ar as $value) {
        $sum = 0;
        foreach ($ar as $value) {
            $sum += $value;
        }
        return $sum;
    }
}

// $list = [2,2,3];
// echo summary($list)."\n";
// echo summary([3,5,7])."\n";



function f1(){
    global $x;
    $x=0;
}
f1();
$x = 10;
 echo $x, "\n";


 function click(){
    static $count;
    $count++;
    echo $count, "\n";
 }
 click();
 click();
 click();