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
}*/




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
</form>



