<!DOCTYPE html>
<html>
<head>
</head>    
<body>
<?php

$entryArray = array();

$title = "right wing sheep meter";

$entryArray[] = "ban CRT from schools";
$entryArray[] = "evolution is just a theory";
$entryArray[] = "2020 election was stolen";
$entryArray[] = "no masks, no jabs";

$fullCount = count($entryArray);

$gotCount = count($_REQUEST);

$percent = $gotCount/$fullCount;

$countArray = array();

foreach($_REQUEST as $req) {
    //echo " -- $req  $fullCount<br>";
    $countArray[] = $req;
}

$percent *= 100;

if($percent)  {
    echo "percent is $percent<br>";

}



?>

<h2><?=$title?></h2>


<form >

<?php
    $count = 0;
    foreach($entryArray as $entry) {
        $entryId = "entry_$count";
        $checked = "";

        $got = in_array($count,$countArray);
        if($got) {
            $checked = "checked";
        }
        
        echo "<input type='checkbox' id='$entryId' name='$entryId' value='$count'  $checked  >";
        echo "<label for='vehicle1'>$entry</label><br>";
        $count++;
    }

?>

<!--
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> I have a car</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> I have a boat</label><br>
-->



<input type="submit" value="Submit">
</form>

</body>

</html>