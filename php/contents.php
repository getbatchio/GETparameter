<?php
    $firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
    $ageInDays = $age * 365;
    
    if (!empty($firstName) && !empty($lastName) && !empty($age)){
        echo "<h1>"."Hello, my name is $firstName $lastName. "."</h1>";
        
        echo "I am $age years old, and ";
        if ($age < 18){
            echo "I am not old enough to vote in the United States. ";
            echo "<br>";
        } else {
            echo "I am old enough to vote in the United States. ";
            echo "<br>";
        }
        echo "That means I'm at least $ageInDays days old";
    } else {
        echo "You did not sumbit firstname and lastname parameters."."<br>";
        echo "You did not submit a numeric age parameter";
    }
 

    ?>