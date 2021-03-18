<?php

/*function capitalize($name){
    return ucwords($name); 
};

$nom= "emile";

$capnom = capitalize($nom);

echo $capnom;*/


/*$date = date("r");

echo $date;*/



/*function sum ($a,$b){
    return $a+$b;
};

echo ($c = sum(8,6));*/




/*function sum ($a,$b){
    if(!is_numeric($a) || !is_numeric($b) ){
        return "Error: argument is the not a number.";
    }else {
        return $a+$b;};
};

echo (sum(15,6));*/


/*function initial($str) {
    $arr = [];
    $var = explode(" ", $str);
    foreach ($var as $elem){
    $a = substr($elem, 0,1);
    array_push($arr, ucfirst($a));
    }
    return implode("",$arr);

};
$blabla = "blalbla blalba blalbavblzg";
print_r(initial($blabla));*/



function replace($string){
        $splitstr = explode("",$string);
        $arr=[];
        foreach($splitstr as $elem){
            if ($elem == "a" && next($elem) == "e" ){
                $elem[$i] = "æ";
                unset(next($elem));
                array_push($elem,$arr);
            };
        };
        return implode("",$arr);
};

$word = "caecotrophie";

echo (replace($word));