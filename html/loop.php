<?php 
/*$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $key) {
    if ($key == "He/She"){
    echo $key." codes <br>";
    }else {
        echo $key." code <br>";
    }
};
*/
?>

<?php
/*$number = 1;
while ($number <= 120){
    echo $number. " <br>";
    $number++;
}*/


/*for ($number2 = 1; $number2 <= 120; $number2++){
    echo $number2. " <br>";
}*/ ?>

<?php
/*$team = ["Pierre", "Paul", "Jacques"];

foreach ($team as $key) {
    echo $key . "</br>";
}*/
?>



<?php/*
<form>
    <label for="country_selector">Choose a country</label>

    <select name="countries" id="country_selector">
        <option value="">--Please choose an option--</option>
        <?php 
            $country = ["Belgium","France","Italy","Germany","Japan","China","Canada","Spain","Netherlands","England"];
            foreach ($country as $key){
                echo   "<option value=\"". $key."\">".$key."</option><br>";
            }

        ?>
    </select>
</form>
*/?>

<form>
    <label for="country_selector">Choose a country</label>

    <select name="countries" id="country_selector">
        <option value="">--Please choose an option--</option>
        <?php 
        $countries = [
            "BEL" => "Belgique",
            "FRA" => "France",
            "ESP" => "Espagne",
            "ITA" => "Italie",
            "PRT" => "Portugal",
            "HRV" => "Croatie",
            "DEU" => "Allemagne",
            "NOR" => "Norvège",
            "DNK" => "Danemark",
            "CHE" => "Suisse"
        ];

        foreach ($countries as $key => $value) {
            echo "<option value=\"" . $key . "\">" . $value . "</option></br>";
        }
        ?>
    </select>
</form>




