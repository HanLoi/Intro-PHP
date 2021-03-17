    <form>
    <input type="radio" action = "" name="specie" value="human">
    <label for="radio">Human</label>
    <input type="radio" action = "" name="specie" value="cat">
    <label for="radio">Cat</label>
    <input type="radio" action = "" name="specie" value="unicorn">
    <label for="radio">Unicorn</label>
    <input type="submit" name="submit" value="Submit">
    </form>


    <?php

if (isset($_GET["specie"])) {

    $specie = $_GET["specie"];
    $gif = ($specie == "human") ? "<img src=\"https://i.gifer.com/3SpP.gif\">" : (($specie == "cat") ? "<img src=\"https://i.pinimg.com/originals/98/70/bb/9870bb35ba3e9c8edc023d94e039217c.gif\">": "<img src=\"https://cdn.shopify.com/s/files/1/1782/5295/files/funnyism_large.gif?v=1532489392\">");
    echo $gif;
} ?>