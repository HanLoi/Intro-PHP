<form method="get" action="">
    <label for="name">Name</label>
    <input type="text" name="name">
    </br>
    <input type="radio" name="gender" value="Girl">
    <label for="girl">Girl</label>
    <input type="radio" name="gender" value="Boy">
    <label for="boy">Boy</label>
    </br>
    <label for="teacher">Name of the teacher</label>
    <input type="teacher" name="teacher">
    </br>
    <input type="radio" action = "" name="reason" value="illness">
    <label for="radio">illness</label>
    </br>
    <input type="radio" action = "" name="reason" value="death of member of our family">
    <label for="death of member of our family">Death's family member</label>
    </br>
    <input type="radio" action = "" name="reason" value="death of our pet">
    <label for="death of our pet">Death of the pet</label>
    </br>
    <label for="activity">Significant extra-curricular activity</label>
    <input type="text" action = "" name="reason">
    </br>
    <label for="other">Any other excuse of your choice</label>
    <input type="text" action = "" name="reason">
    </br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php



if (isset($_GET["name"]) && isset($_GET["gender"]) && isset($_GET["teacher"]) && isset($_GET["reason"])) {


    $gender=$_GET["gender"];
    $reason=$_GET["reason"];

    $illness_boy = "My boy ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because he is sick";
    $death_family_boy = "My boy ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because we have a death in our family";
    $death_pet_boy = "My boy ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because our pet died today";
    $activity_boy = "My boy ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because he must do ". $reason;
    $other_boy = "My boy ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because ". $reason;

    $illness_girl = "My girl ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because he is sick";
    $death_family_girl = "My girl ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because we have a death in our family";
    $death_pet_girl = "My girl ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because our pet died today";
    $activity_girl = "My girl ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because he must do ". $reason;
    $other_girl = "My girl ".$_GET["name"]." who is student of ".$_GET["teacher"]. " can't come to the course because ". $reason;

    if ($_GET["gender"] == "Boy"){
        if($reason = "illness"){
            echo $illness_boy;
        }else if ($reason == "death of member of our family"){
            echo $death_family_boy;
        }else if ($reason == "death of our pet"){
            echo $death_family_boy;
        }else if ($reason == "activity"){
            echo $activity_boy;
        }else if ($reason == "other"){
            echo $other_boy;
        }
    } else if ($_GET["gender"] == "Girl"){
        if($reason = "illness"){
            echo $illness_girl;
        }else if ($reason == "death of member of our family"){
            echo $death_family_girl;
        }else if ($reason == "death of our pet"){
            echo $death_family_girl;
        }else if ($reason == "activity"){
            echo $death_family_girl;
        }
    }
}

