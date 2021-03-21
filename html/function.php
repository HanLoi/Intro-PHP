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


/*function replace($str){
    return str_replace("ae","æ",$str);
};

echo (replace("caecotrophie"));*/




/*function replace($str){
    return str_replace("æ","ae",$str);
};

echo (replace("cæcotrophie"));*/



/*function feedback($message, $css_class = "info"){
    return "<div class=\"".$css_class."\">".$message."</div>";
}

echo feedback("Incorrect email address");*/


/*function random_word_generator(){
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $arr1 =[];
    $arr2=[];

    $rand1= rand(1,5);
    $rand2= rand(7,15);

    for ($i=0; $i < $rand1; $i++) { 
        array_push($arr1, $characters[rand(0,25)]);
    }

    for ($i=0; $i < $rand2; $i++) { 
        array_push($arr2, $characters[rand(0,25)]);
    }

    return "<button>".implode("",$arr1)."</button><br><button>".implode("",$arr2)."</button>";
    //. "</br><button>Generate</button>"; 
}


echo random_word_generator();*/




/*function tolower($word){
    return strtolower($word);
}

echo tolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");*/


/*function calculate_cone_volume($ray,$height){
    $volume = $ray * $ray * 3.14 * $height * (1/3);  
    return "The volume of a cone which ray is ".$ray." and height is ".$height." = " . $volume . ' cm<sup>3</sup><br />';  
}

echo calculate_cone_volume(5,4);*/

