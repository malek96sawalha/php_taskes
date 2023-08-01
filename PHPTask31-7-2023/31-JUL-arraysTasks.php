<?php



// 1.	** Required ** $colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list : 
// Expected Output:  
// •	green
// •	red
// •	white



$colors = array('white', 'green', 'red');

echo '<ul>';
   echo '<li>' . $colors[0] . '</li>';
   echo '<li>' . $colors[1] . '</li>';
   echo '<li>' . $colors[2] . '</li>';
echo '</ul>';




// $color ="red";
// echo <<<"lists" 
// <ul>
//   <li>$color</li> 
//   <li>$color</li>
//   <li>$color</li>
// </ul>
// lists;


echo "<br>";


// 2.	** Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

$cities= array( "Italy"=>"Rome", 
                "Luxembourg"=>"Luxembourg", 
                "Belgium"=> "Brussels", 
                "Denmark"=>"Copenhagen", 
                "Finland"=>"Helsinki", 
                "France" => "Paris", 
                "Slovakia"=>"Bratislava", 
                "Slovenia"=>"Ljubljana", 
                "Germany" => "Berlin", 
                "Greece" => "Athens", 
                "Ireland"=>"Dublin", 
                "Netherlands"=>"Amsterdam", 
                "Portugal"=>"Lisbon", 
                "Spain"=>"Madrid" );


asort($cities);

foreach ($cities as $country => $capital){
    echo "the capital of ". $country ." is ".$capital ."<br>";
};






echo "<br>";

// 3.	**  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

$color = array (4 => 'white', 6 => 'green', 11=> 'red');

echo $color[4];

echo "<br>";



// 4.	**  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

ksort($fruits);

foreach ($fruits as $key => $value){
    echo $key ." = " . $value."<br>";
};

echo "<br>";
asort($fruits);

foreach ($fruits as $key => $value){
    echo $key ." = " . $value."<br>";
};




echo "<br>";





















echo "<br>";
