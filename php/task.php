<?php
// hello world
echo "Hello world", "beautiful "."<br>"; //echo: we can take multiple parameters at a time
//print "Hello world","beautiful";//Parse error: syntax error, unexpected ',' in C:\xampp\htdocs\php\task.php on line 5
print "Hello world"."<br>";
 ?>

 <br>

<?php
 $a=10;
 $b=20;
 echo $a,$b."<br>";
 ?>
<?php
 //sum of numbers
  echo $a+$b."<br>";
?>
<br>

<?php
  //check datatypes
  $x=20;
  $y="sri";
  var_dump($x)."<br>";
  var_dump($y)."<br>";
?>

<br>

<?php               //local variable
function sri(){
	$a=30;
	echo $a."<br>";

}
sri();
?>
<br>


<?php //global variable
$z=10;
function vani(){
	 echo  $GLOBALS['z']."<br>";
}
vani();
?>

<br>

<?php //static variable

function va(){
	static $y=45;

	echo $y."<br>";
}
va();
  ?>

<br>
 
 <?php //arthematic operators
  $n=40;
  $m=50;
   echo $n+$m."<br>";
   echo $n-$m."<br>";
   echo $n*$m."<br>";
   echo $n/$m."<br>";
   echo $n%$m."<br>";
?>
<br>
<?php //assignment operators
  $w=6;
  $v=7;

    echo $w=$w+$v. "<br>";//$w=+$v;
    ?>
<br>

    <?php //comapration between == and ===
     $_s=12;
     $_v="srivani";
     $_u="12";
        var_dump($_s==$_v);
        echo "<br>";
        var_dump($_s==$_u); //its compare value
        echo "<br>";
        var_dump($_s===$_u); //its compare value and datatype
         ?>

           <br>
         <?php  //increment and decrement operators

         $x=15;
          echo $x++;
          echo "<br>";
          echo ++$x;
          echo "<br>";
          echo --$x;
          echo "<br>";
          echo $x--;
         ?>
<br>

<?php 
//errors
 $a=3;
 echo $Z."<br>";//$A
 //Notice: Undefined variable: A in C:\xampp\htdocs\php\task.php on line 17

function ab(){
	echo "php"."<br>";
}
ab();  // ba();  Fatal error: Uncaught Error: Call to undefined function ba() 
   
 // 	include("ab.php"); //Warning: include(ab.php): failed to open stream (if file is missing)
 
  echo " file is included"."<br>" ;//if ; missing.  Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ';'(syntax error)
  
?>

