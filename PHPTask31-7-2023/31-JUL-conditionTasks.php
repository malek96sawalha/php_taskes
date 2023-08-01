

<!-- 1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’ -->

<?php
$year = 2013;
if ($year % 400 == 0) {
    echo $year." This year is a leap year";
 } elseif ($year % 100 == 0) {
    echo $year." This year is not a leap year";
 } elseif ($year % 4 == 0) {
    echo $year." This year is a leap year";
 } else {
    echo $year." This year is not a leap year";
 };

echo "<br>";
// echo 2024 % 4;
// echo "<br>";
echo 2013 % 100;
// echo "<br>";
// echo 2024 % 400;

// 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20,
// we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’
echo "<br>";
$temp = 27;

if ($temp >= 20) {
    echo "It is summertime!";
}else{echo "It is wintertime!";
};



// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same,
// then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
echo "<br>";

$num1 = 2;
$num2 = 2;

if ($num1 == $num2) {
    echo ($num1 + $num2) * 3; 
}else{
   echo $num1 + $num2;
};
echo "<br>";





// 4.	Write PHP to check if the sum of the two given numbers equals 30,
//  if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’


$firstInteger = 10;
$secondInteger = 10;

if (($firstInteger + $secondInteger) == 30 ) {
    echo ($firstInteger + $secondInteger);
}else{ echo "false";
};
echo "<br>";



// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’

$number = 20;

if ($number % 3 == 0) {
    echo $number;
}else{ echo "false";
};
echo "<br>";



// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’

$integer = 50;

if ($integer >= 20 && $integer <= 50) {
    echo "false";
}else{ echo "true";
};
echo "<br>";





// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9

$firstNumber = 1;
$secondNumber = 5;
$therdNumber = 9;

if ($firstNumber > $secondNumber && $firstNumber > $therdNumber){
    echo $firstNumber;
}elseif ($secondNumber > $firstNumber && $secondNumber > $therdNumber){
    echo $secondNumber;
}else{echo $therdNumber;
};
echo "<br>";



// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit


$unit  ;

if ($unit <= 50 ){
    echo $unit * 2.50;
}elseif ($unit > 50 && $unit <= 150 ){
    echo $unit * 5.00;
}elseif ($unit > 150 && $unit <= 250 ){
    echo $unit * 6.2;
}else {
    echo $unit * 7.5;    
};
echo "<br>";




$unit  ;

if ($unit <= 50 ){
    echo $unit * 2.50;
}elseif ($unit > 50 && $unit <= 150 ){
    echo (($unit - 50) * 5.00) + (50 * 2.50) ;
}elseif ($unit > 150 && $unit <= 250 ){
    echo (($unit - 150 )* 6.2) + (($unit - 50) * 5.00) + (50 * 2.50) ;
}else {
    echo (($unit - 250) * 7.5) + (($unit - 150 )* 6.2) + (($unit - 50) * 5.00) + (50 * 2.50);    
};
echo "<br>";












echo "<br>";



// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’


$age = 15 ;

if ($age >= 18){
    echo "You can vote";
}else {
    echo "You can't vote";
};
echo "<br>";



// 10.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’


$checkTheNumber = -60;

if ($checkTheNumber < 0 ){
    echo "Negative";
}elseif ($checkTheNumber == 0){
    echo "Zero";
}else {
    echo "Positive";
};
echo "<br>";






// 11.	Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division


// $operationOne = "+";
// $operationTwo = "-";
// $operationThree = "*";
// $operationFour = "/";


$operator ;
$n1 ;
$n2 ;
$result ;


switch ($operator){
 case 'addition' :
    $result = $n1 + $n2;
    break;
 case  'Subtraction' :
    $result = $n1 - $n2;
    break;
 case  'Multiplication' :
    $result = $n1 * $n2;
    break;
 case  'Division' :
    if ($n2 != 0) {
    $result = $n1 / $n2;
    break;
 }else{
    echo "can not divide by zero";
 };


};
echo "<br>";


// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

// Range	Grade
// <60	    F
// <70	    D
// <80	    C
// <90	    B
// <100  	A

$score = 65;


if ($score < 60 ) {
    echo "F";
}elseif ($score >= 60 && $score < 70 ) {
    echo "D";
}elseif ($score >= 70 && $score < 80 ) {
    echo "C";
}elseif ($score >= 80 && $score < 90 ) {
    echo "B";
}elseif ($score >= 90 && $score < 100) {
    echo "A";
}else{
    echo "Please inter a right value";
}




   




 ?>