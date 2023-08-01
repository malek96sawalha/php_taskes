

<?php


// 1.	Create a script using a for loop to add all the integers between 0 and 30 and display the total.
// **  Required **

// Expected Output:  total as a number 

$number = 0;
for ($i=0; $i <=30  ; $i++) { 
    $number += $i;
}

echo $number;

echo "<br>";



// 4.	Create a script to generate the following pattern, using the nested for loop. **  Required **

// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5



$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows; $j++) {
        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0 ";
        }
    }
   
};



