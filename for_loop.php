<?php
echo "This is for loops in PHP <br>";

for($i=0; $i < 5; $i++){ 
    echo "The number is " . $i . "<br>";
}

// Avoid running into infinite loops like this
// for($i=0; $i < 87;){
//     echo $i
// }

echo "For loop has ended";
?>