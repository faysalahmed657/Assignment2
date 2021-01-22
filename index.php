<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
       <meta name="description" content="">

        <title>
            ASSIGNMENT-2
        </title>
    </head>
	<body>

<?php



//-----------------------------RESULT SYSTEM-----------------------
$marks= 35;

if($marks>=80 && $marks<=100){
	echo "Your Grade: A+ and GPA: 5.00";
}
elseif ($marks>=70 && $marks<=79) {
	echo "Your Grade: A and GPA: 4.50";
}
elseif ($marks>=60 && $marks<=69) {
	echo "Your Grade: A- and GPA: 4.00";
}
elseif ($marks>=50 && $marks<=59) {
	echo "Your Grade: B and GPA: 3.50";
}
elseif ($marks>=40 && $marks<=49) {
	echo "Your Grade: C and GPA: 3.00";
}
elseif ($marks<40) {
	echo "Your Grade: F and GPA: 2.00";
}

echo "<br>";


//--------------------USER ACCESS PROGRAM----------------------- 

$age = 25;

if($age>=20 && $age<=35){
	echo "Successfully Accessed<br>";
}
else{
	echo "Access Denied <br>";
}


//--------------------USER MEMBERSHIP LEVEL ACCORDING CREDIT---------------

$credit = 150;

if($credit<=300 && $credit>=200){
	echo "LEVEL 3<br>";
}
elseif($credit<=199 && $credit>=100){
	echo "LEVEL 2<br>";
}
elseif($credit<=99){
	echo "LEVEL 1<br>";
}


//-----------------------Congratulation Messages-------------------

$gender="Female";
if($marks>=40 && $marks<=100){
	if($gender=="Male"){
	echo "Congratulation Vaiya";
	}
	else{
		echo "Congratulation Apu";
	}
}
else{
	if($gender=="Male"){
	echo "Sorry Vaiya";
	}
	else{
		echo "Sorry Apu";
	}

}

//-----------------------increment/decrement----------------------
echo "Increment 50 times from 10000 : <br>";
for($i=10000; $i<=10050; $i++){
	echo "$i" ." ";
}
echo "<br>Decrement 50 times from 10000 : <br>";
for($i=10000; $i>=9950; $i--){
	echo "$i" ." ";
}

//------------------------ 3 & 4 Divisible ---------------------------

echo "<br>3 & 4 Divisible Numbers Are: <br>";
for($i=1; $i<=500; $i++){
	if($i%3==0 || $i%4==0){
		echo "$i"." ";
	}
}

//-------------------- 11 Divisible and Break --------------------------


for($i=1; ; $i=$i+3){
	if($i%11==0){
		break;
	}
}

//----------------------Multiplication Table -----------------------------
echo "<br>Multiplication Table of 2: <br>";
for($i=1; $i<=10 ; $i++){
	$multiply=2;
	$multiply= $multiply*$i;
	echo "$multiply". " ";
}
echo "<br>Multiplication Table of 3: <br>";
for($i=1; $i<=10 ; $i++){
	$multiply=3;
	$multiply= $multiply*$i;
	echo "$multiply". " ";
}
echo "<br>Multiplication Table of 4: <br>";
for($i=1; $i<=10 ; $i++){
	$multiply=4;
	$multiply= $multiply*$i;
	echo "$multiply". " ";
}
echo "<br>Multiplication Table of 5: <br>";
for($i=1; $i<=10 ; $i++){
	$multiply=5;
	$multiply= $multiply*$i;
	echo "$multiply". " ";
}


?>




</body>
</html>