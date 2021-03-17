<?php
/**
 * Series of exercises on PHP conditional structures.
*/  



// 1.1 Clean your room Exercise 

/**$room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness == "health hazard" ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == "filthy" ){
	echo "Yuk, Room is filthy : let's clean it up !";
}else if( $room_filthiness == "dirty" ){
	echo "Yuk, Room is dirty : let's clean it up !";
}else if( $room_filthiness == "clean" ){
	echo "Well... it's seems clean";
} else {
	echo "<br>Nothing to do, room is immaculate.";
}


// 2. "Different greetings according to time" tentative microtime
date_default_timezone_set("Europe/Brussels"); 
$now = round(microtime(true)*1000) ; // How to get the current time in PHP ? Google is your friend ;-)
print($now);

// Test the value of $now and display the right message according to the specifications.
if( $now >= 1800000000000 && $now <= 3240000000000){
    echo "Good morning !";
} else if ($now >= 3246000000000 && $now <= 4320000000000){
    echo "Good day !";
}else if ($now >= 4326000000000  && $now <= 5760000000000){
    echo "Good afternoon !";
}else if ($now >= 5766000000000 && $now <= 7560000000000){
    echo "Good evening !";
}else if ($now >= 7566000000000 || $now <= 1794000000000){
    echo "Good night !";
}


// 2. "Different greetings according to time" Exercise version Laura
date_default_timezone_set("Europe/Brussels"); // How to get the current time in PHP ? Google is your friend ;-)
$now = date('h:i');
echo $now;

if ($now >= '05:00' && $now <= '09:00') {
    echo "Good morning !";
}
else if ($now >= '09:01' && $now <= '12:00') {
    echo "Good day !";
}
else if ($now >= '12:01' && $now <= '16:00') {
    echo "Good afternoon !";
}
else if ($now >= '16:01' && $now <= '21:00') {
    echo "Good evening !";
}
else if (($now >= '21:01' && $now <= '23:59') || ($now >= '00:00' && $now <= '04:59')) {
    echo "Good night !";
}




// 3. "Different greetings according to age" Exercise
if (isset($_GET['age'])) {
    if (empty($_GET['age'])){
    echo "There is a error, retype your age plz";
    } else  if ( $_GET['age'] < 12){
    echo "Hello kiddo !";
    }else if ($_GET['age'] > 12 && $_GET['age'] < 18 ){
        echo "Hello Teenager !";
    }else if ($_GET['age'] > 18 && $_GET['age'] < 115 ){
        echo "Hello Adult !";
    }else if ($_GET['age'] > 115){
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}else if (!isset($_GET['age'])){
    echo "Tell me your age";
}
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age">...</label>
	<input type="text" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>*/




// 4. Display a different greeting according to the user's age and gender.

// Form (incomplete)
?>

<?php /*if (!isset($_GET['age'])){
    echo "Tell me your age";
    }?>
<form method="get" action="">
    <label for="age">Age</label>
    <input type="text" name="age">
    <input type="submit" name="submit" value="Greet me now">
    <input type="radio" action = "" name="gender" value="Man">
    <label for="radio">Man</label>
    <input type="radio" action = "" name="gender" value="Woman">
    <label for="radio">Woman</label>
</form>



if (isset($_GET['age']) && isset($_GET['gender'])) {
    if (empty($_GET['age'])){
    echo "Error. Try again !";
    } 
    else  if ( $_GET['age'] < 12 && $_GET['gender'] == "Man"){
    echo "Hello kiddo boy!";
    }
    else if (($_GET['age'] >= 12 && $_GET['age'] < 18) && $_GET['gender'] == "Man"){
        echo "Hello Teenager guy!";
    }
    else if (($_GET['age'] >= 18 && $_GET['age'] < 115) && $_GET['gender'] == "Man"){
        echo "Hello Adult man!";
    }
    else if ($_GET['age'] >= 115 && $_GET['gender'] == "Man"){
        echo "Hello papy! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
    else  if ( $_GET['age'] < 12 && $_GET['gender'] == "Woman"){
    echo "Hello kiddo girl!";
    }
    else if (($_GET['age'] >= 12 && $_GET['age'] < 18) && $_GET['gender'] == "Woman"){
        echo "Hello Teenager girl!";
    }
    else if (($_GET['age'] >= 18 && $_GET['age'] < 115) && $_GET['gender'] == "Woman"){
        echo "Hello Adult woman!";
    }
    else if ($_GET['age'] >= 115 && $_GET['gender'] == "Woman"){
        echo "Hello mamy! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }else if (!isset($_GET['age']) || !isset($_GET['gender'])){
        echo "Error, Give me your informations about your age and gender !";
    }
}*/
?>


<?php//5. Display a different greeting according to the user's age, gender and mothertongue.?>

<?php /*
<form method="get" action="">
    <label for="age">Age</label>
    <input type="text" name="age">
    <input type="submit" name="submit" value="Greet me now">
    <input type="radio" action = "" name="gender" value="Man">
    <label for="radio">Man</label>
    <input type="radio" action = "" name="gender" value="Woman">
    <label for="radio">Woman</label>
    <p>Do you speak english ? </p>
    <input type="radio" action = "" name="motherTongue" value="Yes">
    <label for="radio">Yes</label>
    <input type="radio" action = "" name="motherTongue" value="No">
    <label for="radio">No</label>
</form>


<?php
if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['motherTongue'])) {
    if ($_GET['gender'] == "Man"){
        if ($_GET['motherTongue'] == "Yes") {        
            if ( $_GET['age'] < 12){
            echo "Hello kiddo Boy!";
            }
            else if (($_GET['age'] >= 12 && $_GET['age'] < 18)){
                echo "Hello Teenager Boy!";
            }
            else if (($_GET['age'] >= 18 && $_GET['age'] < 115)){
                echo "Hello Adult man!";
            }
            else if ($_GET['age'] >= 115){
                echo "Hello papy! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        } else if ($_GET['motherTongue'] == "No"){
            if ( $_GET['age'] < 12){
                echo "Aloha Boy";
                }
                else if (($_GET['age'] >= 12 && $_GET['age'] < 18)){
                    echo "Aloha Teenager Boy!";
                }
                else if (($_GET['age'] >= 18 && $_GET['age'] < 115)){
                    echo "Aloha Adult man!";
                }
                else if ($_GET['age'] >= 115){
                    echo "Aloha papy! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
        }
    } else if ($_GET['gender'] == "Woman") {
            if ($_GET['motherTongue'] == "Yes") {        
                if ( $_GET['age'] < 12){
                echo "Hello kiddo girl!";
                }
                else if (($_GET['age'] >= 12 && $_GET['age'] < 18)){
                    echo "Hello Teenager girl!";
                }
                else if (($_GET['age'] >= 18 && $_GET['age'] < 115)){
                    echo "Hello Adult woman!";
                }
                else if ($_GET['age'] >= 115){
                    echo "Hello mamy! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
            } else if ($_GET['motherTongue'] == "No"){
                if ( $_GET['age'] < 12){
                    echo "Aloha Girl";
                    }
                    else if (($_GET['age'] >= 12 && $_GET['age'] < 18)){
                        echo "Aloha Teenager girl!";
                    }
                    else if (($_GET['age'] >= 18 && $_GET['age'] < 115)){
                        echo "Aloha Adult woman!";
                    }
                    else if ($_GET['age'] >= 115){
                        echo "Aloha mamy! Still alive ? Are you a robot, like me ? Can I hug you ?";
                    }
            }
    }
} else if (empty($_GET['age']) || empty($_GET['gender']) || empty($_GET['motherTongue'])){
   echo "Precise your age, gender and if you speak english !";
}*/?>


<?php /*
//6. The Girl Soccer team 

<form method="get" action="">
    <label for="age">Age</label>
    <input type="text" name="age">
    <input type="submit" name="submit" value="Greet me now">
    </br>
    <input type="radio" action = "" name="gender" value="Man">
    <label for="radio">Man</label>
    <input type="radio" action = "" name="gender" value="Woman">
    <label for="radio">Woman</label>
    </br>
    <input type="text" name="name">
    <label for="name">Your name</label>
</form>



if (isset($_GET['age']) && isset($_GET['gender'])) {
    if ($_GET['gender'] == "Man"){
        echo "Sorry, this is a Girl soccer team";
    } else if ($_GET['gender'] == "Woman") {      
                if ($_GET['age'] < 21){
                echo "Sorry you are too young !";
                }
                else if ($_GET['age'] >= 21 && $_GET['age'] <= 40){
                    echo "Welcome to the team ", $_GET['name'] , "  !";
                }
                else if ($_GET['age'] >= 18 ){
                    echo "Sorry, you are too old !";
                }
        } else if (empty($_GET['age']) || empty($_GET['gender'])){
            echo "Precise your age, gender and your name !";
        }
} */?>


<?php /*7. Achieve the same, without the ELSE.




<form method="get" action="">
    <label for="age">Age</label>
    <input type="text" name="age">
    <input type="submit" name="submit" value="Greet me now">
    </br>
    <input type="radio" action = "" name="gender" value="Man">
    <label for="radio">Man</label>
    <input type="radio" action = "" name="gender" value="Woman">
    <label for="radio">Woman</label>
    </br>
    <input type="text" name="name">
    <label for="name">Your name</label>
</form>



if ((isset($_GET['age']) && isset($_GET['gender'])) && $_GET['age'] >= 21 && $_GET['age'] <= 40 && $_GET['gender'] == "Woman" ) {
        echo "Welcome to the team ", $_GET["name"], " !";
}
*/?> 



<?php /* //8. "School sucks!" Exercise

<form method="get" action="">
    <label for="note">Note</label>
    <input type="text" name="note">
</form>




if (isset($_GET['note'])) {
    if ($_GET['note'] < 4){
        echo "This work is really bad. What a dumb kid! ";
    } else if ($_GET['note'] >= 5 && $_GET['note'] <= 9) {      
        echo "This is not sufficient. More studying is required.";
    } else if ($_GET['note'] == 10 ){
        echo "barely enough!";
    }else if ($_GET['note'] >= 11 && $_GET['note'] <= 14 ){
        echo "Not bad!";
    }else if ($_GET['note'] >= 15 && $_GET['note'] <= 18 ){
        echo "Bravo, bravissimo!";
    }else if ($_GET['note'] >= 19 ){
        echo "Too good to be true : confront the cheater!";
    }
} */ ?>


<?php /* //9. The "Switch" structure. 


<form method="get" action="">
    <label for="note">Note</label>
    <input type="text" name="note">
</form>




$note = $_GET["note"];

switch ($note) {
    case 0 ;
    case 1 ;
    case 2 ;
    case 3 ;
    case 4 ;
        echo "This work is really bad. What a dumb kid!";
    break;
    case 5 ;
    case 6 ;
    case 7 ;
    case 8 ;
    case 9 ;
        echo "This is not sufficient. More studying is required.";
    break;
    case 10 :
        echo "barely enough!";
    case 11 ;
    case 12 ; 
    case 13 ; 
    case 14 ; 
        echo "Not bad!" ;
    break;
    case 15 ; 
    case 16 ; 
    case 17 ; 
    case 18 ;
        echo "Bravo, bravissimo!";
    break;
    case 19;
    case 20;
        echo "Too good to be true : confront the cheater!";
    break;
    default:
        echo "Give the note of the student";
    }
*/ ?>



